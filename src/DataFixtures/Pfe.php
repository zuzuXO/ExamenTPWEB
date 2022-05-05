<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Pfe extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for($i = 0 ; $i< 100 ; $i++) {
            $pfe = new Pfe();
            $pfe->setTitle($faker->Title);
            $pfe->setName($faker->name);
            $manager->persist($pfe);
        }

        $manager->flush();
    }
}
