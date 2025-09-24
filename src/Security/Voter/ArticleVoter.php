<?php

namespace App\Security\Voter;

use App\Entity\Article;
use App\Repository\MembershipRepository;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class ArticleVoter extends Voter
{
    public const VIEW = 'VIEW';

    public function __construct(private MembershipRepository $membershipRepo) {}

    /**
     * Indique si ce voter sait gérer l’attribut/objet donnés.
     */
    protected function supports(string $attribute, $subject): bool
    {
        return $attribute === self::VIEW && $subject instanceof Article;
    }

    /**
     * Règle d’accès :
     * - Article public  => accès pour tous
     * - Article "membres" => accès si utilisateur authentifié ET
     *   (a) possède un rôle membre (ou supérieur) OU
     *   (b) possède une entrée Membership en base (membre sans rôle)
     */
    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        /** @var Article $article */
        $article = $subject;

        // 1- Contenu public : accessible à tout le monde
        if (!$article->isMembersOnly()) {
            return true;
        }

        // 2- Contenu réservé : nécessite un utilisateur connecté
        $user = $token->getUser();
        if (!is_object($user)) {
            return false; // anonyme => refus
        }

        // 3 Autoriser si l'utilisateur a un rôle de membre (ou supérieur)
        //   avec la hiérarchie des rôles, ROLE_ADMIN > ROLE_EDITOR > ROLE_MEMBER
        $roles = $token->getRoleNames();
        if (in_array('ROLE_MEMBER', $roles, true) || in_array('ROLE_EDITOR', $roles, true) || in_array('ROLE_ADMIN', $roles, true)) {
            return true;
        }

        // 4'- Sinon, autoriser si une Membership existe pour lu utilisateur
        //    Utile si on va gerer des “membres” via la table Membership sans leur attribuer un role.
        return null !== $this->membershipRepo->findOneBy(['user' => $user]);
    }
}
