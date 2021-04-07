<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
class ArticleFixture extends Fixture
{


    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        for( $i = 0; $i<10; $i++){
            $article = new Article();
            $article 
                ->setTitle($faker->words(3, true))
                ->setDescription($faker->sentences(3, true))
                ->setPrice($faker->numberBetween(10, 100))
                ->setimage($faker->numberBetween(3, 10))
                ->setCategory($faker->numberBetween(0, 5))
                ->setQuantity($faker->numberBetween(10, 100));
            $manager->persist($article);
        }
        $manager->flush();
    }
}
