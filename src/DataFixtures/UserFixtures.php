<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{

    private $hasher;

    public function __construct(UserPasswordHasherInterface $hasher){
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setUsername('loremipsum');
        $user->setPassword($this->hasher->hashPassword($user, 'lorem'));
        $user->setRoles(['ROLE_ADMIN']);

        $user2 = new User();
        $user2->setUsername('dolorsit');
        $user2->setPassword($this->hasher->hashPassword($user2, 'dolor'));

        $manager->persist($user);
        $manager->persist($user2);
        $manager->flush();

        $manager->flush();
    }
}
