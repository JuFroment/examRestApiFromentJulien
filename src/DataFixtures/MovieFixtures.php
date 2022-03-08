<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie1 = new Movie();
        $movie1->setTitle('Rubber');
        $movie1->setDescription('Dans le désert californien, des spectateurs incrédules assistent aux aventures d’un pneu tueur et télépathe, mystérieusement attiré par une jolie jeune fille. Une enquête commence. ');
        $movie1->setDirector('Quentin Dupieux');

        $manager->persist($movie1);
        $manager->flush();
    }
}
