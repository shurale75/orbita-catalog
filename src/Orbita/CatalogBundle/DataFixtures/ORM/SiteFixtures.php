<?php

namespace Orbita\CatalogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Orbita\CatalogBundle\Entity\Site;

class SiteFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $site1 = new Site();
        $site1->setTitle('Site1');
        $site1->setCatId($manager->merge($this->getReference('category-1')));
        $site1->setDescription('Description Description Description Description 1 1 1');
        $site1->setGrade(1);
        $site1->setImage('beach.jpg');
        $site1->setKeyWords('SiteKeyword1 SiteKeyword1 SiteKeyword1');
        $site1->setLang('rus');
        $site1->setLink('http://www.site1.com');
        $site1->setStatus(1);
        $site1->setUid($manager->merge($this->getReference('user-1')));
        $site1->setVip(0);
        $manager->persist($site1);

        $site2 = new Site();
        $site2->setTitle('Site2');
        $site2->setCatId($manager->merge($this->getReference('category-1')));
        $site2->setDescription('Description Description Description Description 2 2 2');
        $site2->setGrade(1);
        $site2->setImage('misdirection.jpg');
        $site2->setKeyWords('SiteKeyword2 SiteKeyword2 SiteKeyword2');
        $site2->setLang('rus');
        $site2->setLink('http://www.site2.com');
        $site2->setStatus(1);
        $site2->setUid($manager->merge($this->getReference('user-1')));
        $site2->setVip(0);
        $manager->persist($site2);

        $site3 = new Site();
        $site3->setTitle('Site3');
        $site3->setCatId($manager->merge($this->getReference('category-2')));
        $site3->setDescription('Description Description Description Description 3 3 3');
        $site3->setGrade(1);
        $site3->setImage('one_or_zero.jpg');
        $site3->setKeyWords('SiteKeyword3 SiteKeyword3 SiteKeyword3');
        $site3->setLang('rus');
        $site3->setLink('http://www.site3.com');
        $site3->setStatus(1);
        $site3->setUid($manager->merge($this->getReference('user-2')));
        $site3->setVip(0);
        $manager->persist($site3);

        $site4 = new Site();
        $site4->setTitle('Site4');
        $site4->setCatId($manager->merge($this->getReference('category-3')));
        $site4->setDescription('Description Description Description Description 4 4 4');
        $site4->setGrade(1);
        $site4->setImage('pool_leak.jpg');
        $site4->setKeyWords('SiteKeyword4 SiteKeyword4 SiteKeyword4');
        $site4->setLang('rus');
        $site4->setLink('http://www.site4.com');
        $site4->setStatus(1);
        $site4->setUid($manager->merge($this->getReference('user-3')));
        $site4->setVip(0);
        $manager->persist($site4);

        $site5 = new Site();
        $site5->setTitle('Site5');
        $site5->setCatId($manager->merge($this->getReference('category-2')));
        $site5->setDescription('Description Description Description Description 5 5 5');
        $site5->setGrade(1);
        $site5->setImage('the_grid.jpg');
        $site5->setKeyWords('SiteKeyword5 SiteKeyword5 SiteKeyword5');
        $site5->setLang('rus');
        $site5->setLink('http://www.site5.com');
        $site5->setStatus(1);
        $site5->setUid($manager->merge($this->getReference('user-2')));
        $site5->setVip(0);
        $manager->persist($site5);

        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}