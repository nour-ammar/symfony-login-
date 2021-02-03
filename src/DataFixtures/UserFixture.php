<?php

namespace App\DataFixtures;
use App\Entity\Pro;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture
{
    private $encoder;
    public function __construct(UserPasswordEncoderInterface $encoder){
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        $user = new Pro();
        $user->setUsername('Admin');
        $user->setPassword(
            $this->encoder->encodePassword($user , 'admin')
        );
        $manager->persist($user);
        $manager->flush();
    }
}
