<?php

namespace Orbita\CatalogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Orbita\CatalogBundle\Entity\Category;

class CategoryFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $category1 = new Category();
        $category1->setTitle('Category1');
        $category1->setTags('tagcat11, tagcat12, tagcat13');
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setTitle('Category2');
        $category2->setTags('tagcat21, tagcat22, tagcat23');
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setTitle('Category3');
        $category3->setTags('tagcat31, tagcat32, tagcat33');
        $manager->persist($category3);

        $manager->flush();

        $this->addReference('category-1', $category1);
        $this->addReference('category-2', $category2);
        $this->addReference('category-3', $category3);
    }

    public function getOrder()
    {
        return 1;
    }
}