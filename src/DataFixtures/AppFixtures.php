<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product_1 = new Product;
        $product_1->setName("First product");
        $product_1->setDescription("First product description");
        $product_1->setSize(14);
        $manager->persist($product_1);

        $product_2 = new Product;
        $product_2->setName("Second product");
        $product_2->setDescription("Second product description");
        $product_2->setSize(16);
        $manager->persist($product_2);

        $product_3 = new Product;
        $product_3->setName("Third product");
        $product_3->setDescription("Third product description");
        $product_3->setSize(14);
        $manager->persist($product_3);

        $product_4 = new Product;
        $product_4->setName("Fourth product");
        $product_4->setDescription("Fourth product description");
        $product_4->setSize(12);
        $manager->persist($product_4);

        $manager->flush();
    }
}
