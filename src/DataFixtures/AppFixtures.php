<?php

namespace App\DataFixtures;

use App\Entity\{
    User, Page, PartnerLink, Article, Event, Album, Photo,
    ClassifiedAd, Membership, MembershipApplication, OutingRequest
};
use App\Enum\{
    AdStatus, MediaVisibility, MembershipStatus, ApplicationStatus
};
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory as Faker;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\AsciiSlugger;

final class AppFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $hasher) {}

    public function load(ObjectManager $em): void
    {
        $faker     = Faker::create('fr_FR');
        $slugger   = new AsciiSlugger();

        // Timezone helpers
        $tzString  = 'Europe/Paris';
        $tzObj     = new \DateTimeZone($tzString);

        // ---------------- Helpers ----------------
        $set = function(object $obj, string $setter, mixed $value): void {
            if (method_exists($obj, $setter)) {
                $obj->{$setter}($value);
            }
        };

        $toImmutable = function(?\DateTime $dt) {
            return $dt ? \DateTimeImmutable::createFromMutable($dt) : null;
        };


        $enumPick = function(string $enumFqcn, array $fallbackStrings) use ($faker) {
            if (class_exists($enumFqcn) && method_exists($enumFqcn, 'cases')) {
                $cases = $enumFqcn::cases();
                return $cases[array_rand($cases)];
            }
            return $faker->randomElement($fallbackStrings);
        };

        // ---------------- Users ----------------
        $admin = (new User())
            ->setEmail('admin@appac56.fr')
            ->setFirstName('Admin')
            ->setLastName('Appac')
            ->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->hasher->hashPassword($admin, 'admin1234'));
        $em->persist($admin);

        $users = [$admin];
        for ($i = 0; $i < 8; $i++) {
            $u = (new User())
                ->setEmail($faker->unique()->safeEmail())
                ->setFirstName($faker->firstName())
                ->setLastName($faker->lastName())
                ->setPhone($faker->optional()->phoneNumber())
                ->setNewsletterOptIn($faker->boolean(40));
            $u->setPassword($this->hasher->hashPassword($u, 'password'));
            $em->persist($u);
            $users[] = $u;
        }

        // ---------------- Pages ----------------
        foreach (['Qui sommes-nous', 'Sécurité en mer', 'Contact'] as $pTitle) {
            $p = new Page();
            $pSlug = strtolower($slugger->slug($pTitle)->toString());
            $p->setTitle($pTitle);
            $p->setSlug($pSlug);
            $p->setBody($faker->paragraphs(3, true));
            $p->setIsPublished(true);
            $set($p, 'setMetaTitle', $pTitle);
            $set($p, 'setMetaDescription', $faker->sentence(12));
            $em->persist($p);
        }

        // ---------------- Partner links ----------------
        foreach (['Météo France' => 'https://meteofrance.com', 'SHOM' => 'https://shom.fr'] as $label => $url) {
            $pl = (new PartnerLink())
                ->setLabel($label)
                ->setUrl($url)
                ->setIsActive(true);
            $em->persist($pl);
        }

        // ---------------- Articles ----------------
        for ($i = 0; $i < 6; $i++) {
            $title = $faker->sentence(6);
            $a = new Article();

            $a->setTitle($title);
            $a->setSlug(strtolower($slugger->slug($title)->toString()));
            $a->setContent($faker->paragraphs(5, true));
            $a->setCover(null);
            $a->setIsPublished($faker->boolean(80));
            $a->setIsMembersOnly($faker->boolean(20));
            $a->setPinned($faker->boolean(15));

            $publishedMutable = $faker->optional()->dateTimeBetween('-30 days', 'now', $tzString);
            $a->setPublishedAt($toImmutable($publishedMutable));

            $a->setAuthor($faker->randomElement($users));

            $em->persist($a);
        }

        // ---------------- Events ----------------
        $events = [];
        for ($i = 0; $i < 5; $i++) {
            $startMutable = $faker->dateTimeBetween('-10 days', '+20 days', $tzString);
            $endMutable   = (clone $startMutable)->modify('+'.mt_rand(2,8).' hours');

            $e = new Event();
            $title = 'Sortie ' . $faker->city();

            $e->setTitle($title);
            $e->setSlug(strtolower($slugger->slug($title)->toString()));
            $e->setDescription($faker->paragraphs(3, true));
            $e->setType($faker->randomElement(['OUTING', 'REGATTA', 'MEETING', 'OTHER']));
            $e->setStatus($faker->randomElement(['DRAFT', 'PUBLISHED', 'CANCELLED']));
            $e->setRegistrationOpen($faker->boolean(70));
            $e->setIsMembersOnly($faker->boolean(30));
            $e->setStartAt($toImmutable($startMutable));
            $e->setEndAt($toImmutable($endMutable));
            $e->setLocationName($faker->city());

            $lat = $faker->optional()->randomFloat(6, 47.0, 48.5);
            $lng = $faker->optional()->randomFloat(6, -3.5, -2.0);
            $e->setLat($lat !== null ? (string)$lat : null);
            $e->setLng($lng !== null ? (string)$lng : null);

            $e->setMaxParticipants($faker->optional()->numberBetween(8, 40));
            $e->setCreatedBy($admin);

            $em->persist($e);
            $events[] = $e;
        }

        // ---------------- Album + Photo ----------------
        for ($i = 0; $i < 3; $i++) {
            $album = (new Album())
                ->setTitle('Album ' . $faker->city())
                ->setDescription($faker->optional()->paragraph());
            $set($album, 'setCover', null);
            $em->persist($album);

            for ($j = 0; $j < mt_rand(3, 7); $j++) {
                $photo = new Photo();
                $photo->setFileName('placeholder' . mt_rand(1,5) . '.jpg');
                $photo->setTitle($faker->optional()->sentence(4));
                $photo->setDescription($faker->optional()->sentence(10));
                $photo->setOwner($faker->randomElement($users));
                $photo->setAlbum($album);

                $vis = $enumPick(MediaVisibility::class, ['PUBLIC', 'MEMBERS']);
                $photo->setVisibility($vis);

                $takenMutable = $faker->optional()->dateTimeBetween('-1 year', 'now', $tzString);
                $photo->setTakenAt($toImmutable($takenMutable));

                $em->persist($photo);
            }
        }

        // ---------------- Classified Ads ----------------
        for ($i = 0; $i < 5; $i++) {
            $ad = (new ClassifiedAd())
                ->setOwner($faker->randomElement($users))
                ->setTitle('Vendo ' . $faker->word())
                ->setDescription($faker->paragraphs(2, true))
                ->setPrice($faker->optional()->randomFloat(2, 20, 2000))
                ->setCondition($faker->optional()->randomElement(['Nuevo', 'Usado']))
                ->setLocation($faker->city());

            $status = $enumPick(AdStatus::class, ['PENDING','APPROVED','REJECTED','ARCHIVED']);
            $ad->setStatus($status);

            $isApproved = is_object($status) ? ($status->value === 'APPROVED') : ($status === 'APPROVED');
            if ($isApproved) {
                $pubMutable = $faker->optional()->dateTimeBetween('-15 days', 'now', $tzString);
                $ad->setPublishedAt($toImmutable($pubMutable));
            }
            $em->persist($ad);
        }

        // ---------------- Memberships & Applications ----------------
        $year = (int)(new \DateTimeImmutable('now', $tzObj))->format('Y');

        foreach (array_slice($users, 1) as $u) {
            $m = (new Membership())
                ->setUser($u)
                ->setYear($year);

            // FR: Ne PAS mettre "PAID" (état de paiement). Utiliser le statut de membership.
            $picked = $enumPick(MembershipStatus::class, ['PENDING','ACTIVE','EXPIRED']);
            $m->setStatus(
                \is_object($picked)
                    ? $picked
                    : (MembershipStatus::tryFromMixed($picked) ?? MembershipStatus::ACTIVE)
            );

            $em->persist($m);

            if ($faker->boolean(30)) {
                $app = (new MembershipApplication())
                    ->setFirstName($faker->firstName())
                    ->setLastName($faker->lastName())
                    ->setEmail($faker->unique()->safeEmail())
                    ->setTargetYear($year + 1)
                    ->setMessage($faker->optional()->sentence());

                $appStatus = $enumPick(ApplicationStatus::class, ['PENDING','APPROVED','REJECTED','ON_HOLD']);
                $app->setStatus(\is_object($appStatus) ? $appStatus : ApplicationStatus::PENDING);

                if ($faker->boolean(50)) {
                    $app->setProcessedBy($admin);
                    $procMutable = $faker->optional()->dateTimeBetween('-30 days', 'now', $tzString);
                    $app->setProcessedAt($toImmutable($procMutable));
                }
                $em->persist($app);
            }
        }

        // ---------------- Outing Requests ----------------
        foreach ($events as $e) {
            $n = mt_rand(1, 5);
            for ($k = 0; $k < $n; $k++) {
                $req = (new OutingRequest())
                    ->setEvent($e)
                    ->setUser($faker->boolean(60) ? $faker->randomElement($users) : null)
                    ->setContactName($faker->name())
                    ->setEmail($faker->safeEmail())
                    ->setPhone($faker->optional()->phoneNumber())
                    ->setEmergencyPhone($faker->optional()->phoneNumber())
                    ->setSeats(mt_rand(1, 4))
                    ->setGuestNames($faker->optional()->sentence(6))
                    ->setMessage($faker->optional()->sentence(12))
                    ->setStatus($faker->randomElement(['PENDING','CONFIRMED','CANCELLED']));
                $em->persist($req);
            }
        }

        $em->flush();
    }
}
