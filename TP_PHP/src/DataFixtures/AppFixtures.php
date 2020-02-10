<?php

namespace App\DataFixtures;

use App\Entity\CardTemplate;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        for($i = 0; $i <  100; $i++) {
            $cardTemplate = new CardTemplate();
            $cardTemplate->setName($faker->name)
            ->setDescription($faker->text())
            ->setActive($faker->boolean(70))
            ->setPrenium($faker->boolean(20))
            ->setPreview($faker->catchPhrase);

            $manager->persist($cardTemplate);
        }

        $manager->flush();
    }
}
