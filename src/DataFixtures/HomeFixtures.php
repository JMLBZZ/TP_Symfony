<?php

namespace App\DataFixtures;

use App\Entity\Home;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class HomeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $home = new Home();
        $home->setTitre("Bienvenue sur le site");
        $home->setTexte("<p>In nisl massa, dignissim at pharetra vel, fermentum eget justo. Nullam at diam lacus. Quisque luctus nibh at nisl faucibus condimentum. Praesent aliquet consectetur orci nec fermentum. Phasellus eget venenatis nulla. Curabitur lobortis mauris sit amet tellus consequat ultricies. Mauris urna ligula, euismod pulvinar rutrum quis, pellentesque eu mauris. In quis ex orci. Vestibulum nec iaculis neque. Proin lobortis metus egestas lorem lobortis suscipit.</p>");
        $home->setSignature("Jamel");
        $home->setIsActive(true);
        $manager->persist($home);
        
        $manager->flush();
    }
}
