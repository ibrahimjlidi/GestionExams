<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\EnseignantFactory;
use App\Factory\EtudiantFactory;
use App\Factory\FiliereFactory;
use App\Factory\UserFactory;
use App\Factory\MoudleFactory;
use App\Factory\ResetPasswordRequestFactory;
use App\Factory\SemestreFactory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         
        // $product = new Product();
        // $manager->persist($product);
        UserFactory::createMany(1);
        EnseignantFactory::createMany(10);
        EtudiantFactory::createMany(10);
        SemestreFactory::createMany(10);
        FiliereFactory::createMany(10);   
        // ModuleFactory::createMany(10);
        $manager->flush();
    }
}
