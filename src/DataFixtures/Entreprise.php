<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Entreprise extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for($i = 0 ; $i< 100 ; $i++) {
            $entreprise = new Entreprise();
            $entreprise->setNameEntreprise($faker->company);
            $manager->persist($entreprise);
        }
        $manager->flush();
    }
}
