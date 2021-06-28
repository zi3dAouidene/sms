<?php

namespace App\DataFixtures;
use App\Entity\Admin;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        // for($i=1; $i<=2;$i++){
            $user = new Admin();
            $user->setEmail("zee@me.com")
                  ->setPassword($this->encoder->encodePassword($user,'zied'))
				  ->setRoles(['ROLE_ADMIN'])
                  ;
            $manager->persist($user);
        // }

        $manager->flush();
    }
}
