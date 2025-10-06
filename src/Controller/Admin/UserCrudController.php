<?php

//
// namespace App\Controller\Admin;
//
// use App\Entity\User;
// use Doctrine\ORM\EntityManagerInterface;
// use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
// use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
// use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
// use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
// use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
// use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
// use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
// use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
// use EasyCorp\Bundle\EasyAdminBundle\Filter\BooleanFilter;
// use Symfony\Bridge\Twig\Mime\TemplatedEmail;
// use Symfony\Component\Mailer\MailerInterface;
// use Symfony\Component\Mime\Email;
// use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
// use Twig\Environment as TwigEnvironment;
//
// class UserCrudController extends AbstractCrudController
// {
//    public static function getEntityFqcn(): string
//    {
//        return User::class;
//    }
//
//    public function configureCrud(Crud $crud): Crud
//    {
//        return $crud
//            ->setEntityLabelInPlural('Utilisateurs')
//            ->setEntityLabelInSingular('Utilisateur')
//            ->setDefaultSort(['createdAt' => 'DESC']);
//    }
//
//    public function configureFields(string $pageName): iterable
//    {
//        return [
//            EmailField::new('email'),
//            TextField::new('firstName', 'Prénom'),
//            TextField::new('lastName', 'Nom'),
//            BooleanField::new('isApproved', 'Approuvé ?')
//                ->renderAsSwitch(true) // Affiche un toggle (bouton switch) directement dans la liste
//                ->setSortable(true),
//            BooleanField::new('newsletterOptIn', 'Newsletter'),
//        ];
//    }
//
//    public function configureActions(Actions $actions): Actions
//    {
//        $approveUser = Action::new('approveUser', 'Valider')
//            ->linkToCrudAction('approveUser')
//            ->displayIf(fn ($entity) => !$entity->isApproved()) // Affiche seulement si non validé
//            ->addCssClass('btn btn-success');
//
//        return $actions
//            ->add(Crud::PAGE_INDEX, $approveUser)   // Affiche un bouton dans la liste
//            ->add(Crud::PAGE_DETAIL, $approveUser); // Affiche un bouton dans le détail
//    }
//
//    public function approveUser(AdminContext $context, EntityManagerInterface $em)
//    {
//        /** @var User $user */
//        $user = $context->getEntity()->getInstance();
//
//        if ($user->isApproved()) {
//            $this->addFlash('info', 'Cet utilisateur est déjà approuvé.');
//        } else {
//            $user->setIsApproved(true);
//            $em->flush();
//
//            $this->addFlash('success', 'Utilisateur approuvé avec succès ✅');
//        }
//
//        return $this->redirect($context->getReferrer());
//    }
//
//    public function configureFilters(Filters $filters): Filters
//    {
//        return $filters
//            ->add(BooleanFilter::new('isApproved', 'Approuvé ?'));
//    }
//
//    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
//    {
//        if (!$entityInstance instanceof User) {
//            parent::updateEntity($entityManager, $entityInstance);
//
//            return;
//        }
//
//        // Affiche un message flash si l'utilisateur vient d'être approuvé
//        if ($entityInstance->isApproved() && null !== $entityInstance->getUpdatedAt()) {
//            $this->addFlash('success', sprintf(
//                "L'utilisateur a été approuvé avec succès ✅",
//                $entityInstance->getEmail()
//            ));
//
//            // Envoyer un email à l'utilisateur quand il a été approuvé par l'admin
//            //            $email = (new Email())
//            //                ->from('no-reply@tonsite.fr')
//            //                ->to($entityInstance->getEmail())
//            //                ->subject('Votre compte a été approuvé')
//            //                ->html(
//            //                    '<p>Bonjour '.htmlspecialchars($entityInstance->getFullName()).",</p>
//            //                <p>Votre compte sur notre site a été validé par l'administrateur. Vous pouvez désormais vous connecter.</p>
//            //                <p><a href='".$this->generateUrl('app_login', [], \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL)."'>Se connecter</a></p>"
//            //                );
//
//            $email = (new TemplatedEmail())
//                ->from('no-reply@tonsite.fr')
//                ->to($entityInstance->getEmail())
//                ->subject('Votre compte a été approuvé')
//                ->htmlTemplate('emails/user_approved.html.twig')
//                ->context([
//                    'user' => $entityInstance,
//                    'login_url' => $this->generateUrl('app_login', [], UrlGeneratorInterface::ABSOLUTE_URL),
//                ]);
//
//            $this->mailer->send($email);
//        }
//
//        parent::updateEntity($entityManager, $entityInstance);
//    }
//
//    private MailerInterface $mailer;
//    private TwigEnvironment $twig;
//
//    public function __construct(MailerInterface $mailer, TwigEnvironment $twig)
//    {
//        $this->mailer = $mailer;
//        $this->twig = $twig;
//    }
// }

namespace App\Controller\Admin;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\BooleanFilter;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class UserCrudController extends AbstractCrudController
{
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Utilisateur')
            ->setEntityLabelInPlural('Utilisateurs')
            ->setDefaultSort(['createdAt' => 'DESC']);
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            EmailField::new('email'),
            TextField::new('firstName', 'Prénom'),
            TextField::new('lastName', 'Nom'),
            BooleanField::new('isApproved', 'Approuvé ?')
                ->renderAsSwitch(true)
                ->setSortable(true),
            BooleanField::new('newsletterOptIn', 'Newsletter'),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        $approveUser = Action::new('approveUser', 'Valider')
            ->linkToCrudAction('approveUser')
            ->displayIf(fn (User $entity) => !$entity->isApproved())
            ->addCssClass('btn btn-success');

        return $actions
            ->add(Crud::PAGE_INDEX, $approveUser)
            ->add(Crud::PAGE_DETAIL, $approveUser);
    }

    public function approveUser(AdminContext $context, EntityManagerInterface $em)
    {
        /** @var User $user */
        $user = $context->getEntity()->getInstance();

        if (!$user->isApproved()) {
            $user->setIsApproved(true);
            $em->flush();

            $this->addFlash('success', 'Utilisateur approuvé avec succès ✅');

            // Pour envoyer un email à l'utilisateur quand il a été approuvé par l'admin
            $email = (new TemplatedEmail())
                ->from('no-reply@tonsite.fr')
                ->to($user->getEmail())
                ->subject('Votre compte a été approuvé')
                ->htmlTemplate('emails/user_approved.html.twig')
                ->context([
                    'user' => $user,
                    'login_url' => $this->generateUrl('app_login', [], UrlGeneratorInterface::ABSOLUTE_URL),
                ]);

            $this->mailer->send($email);
        } else {
            $this->addFlash('info', 'Cet utilisateur est déjà approuvé.');
        }

        return $this->redirect($context->getReferrer());
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add(BooleanFilter::new('isApproved', 'Approuvé ?'));
    }

    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        if ($entityInstance instanceof User && $entityInstance->isApproved()) {
            // Envoi d'email lors de l'approbation via formulaire Edit
            $email = (new TemplatedEmail())
                ->from('no-reply@tonsite.fr')
                ->to($entityInstance->getEmail())
                ->subject('Votre compte a été approuvé')
                ->htmlTemplate('emails/user_approved.html.twig')
                ->context([
                    'user' => $entityInstance,
                    'login_url' => $this->generateUrl('app_login', [], UrlGeneratorInterface::ABSOLUTE_URL),
                ]);

            $this->mailer->send($email);
        }

        parent::updateEntity($entityManager, $entityInstance);
    }
}
