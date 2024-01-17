<?php

namespace App\DataFixtures;


use App\Entity\Property;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    
    public function load(ObjectManager $manager): void
    {
        for ($i=1; $i <=10 ; $i++) {
             $property = new Property();
        $property->setCategory('maison')
                 ->setType('vendre')
                 ->setStatus('tres bien')
                 ->setSurface(mt_rand(55,99))
                 ->setPrice(mt_rand(55812,145878))
                 ->setPicture('picture')
                 ->setAdresse('9 rue chantal sandrin')
                 ->setCity('lyon')
                 ->setZipecode(69008);

                $manager->persist($property);
       
        }
       

      

        $manager->flush();
    }
}
