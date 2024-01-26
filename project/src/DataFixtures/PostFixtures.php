<?php

namespace App\DataFixtures;

use App\Entity\Post\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        
        for ($i = 0; $i < 50; $i++) {
            $post = new Post();
            $post->setTitle($faker->words(4, true))
                ->setContent($faker->realText(1800))
                ->setState($faker->randomElement(Post::STATES));

            $manager->persist($post);
        }

        $manager->flush();
    }
}
