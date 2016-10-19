<?php

namespace Orbita\CatalogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Orbita\CatalogBundle\Entity\User;

class UserFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setName('User1');
        $user1->setEmail('user1@mail.com');
        $manager->persist($user1);

        $user2 = new User();
        $user2->setName('User2');
        $user2->setEmail('user2@mail.com');
        $manager->persist($user2);

        $user3 = new User();
        $user3->setName('User3');
        $user3->setEmail('user3@mail.com');
        $manager->persist($user3);

        $manager->flush();

        $this->addReference('user-1', $user1);
        $this->addReference('user-2', $user2);
        $this->addReference('user-3', $user3);
    }

    public function getOrder()
    {
        return 2;
    }
}