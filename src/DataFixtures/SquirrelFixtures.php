<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Squirrel;

class SquirrelFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
	    for ($i = 0; $i < 5; $i++) {
		    $squirrel = new Squirrel();
		    $squirrel->setName('name' . $i);
		    $manager->persist($squirrel);
	    }

	$manager->flush();
}
}
