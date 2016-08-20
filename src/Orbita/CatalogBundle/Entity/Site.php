<?php

namespace Orbita\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="catalog-sites")
 */
class Site
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="sites")
     * @ORM\JoinColumn(name="cat_id", referencedColumnName="id")
     */
    protected $cat_id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="sites")
     * @ORM\JoinColumn(name="uid", referencedColumnName="id")
     */
    protected $uid;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $image;

    /**
     * @ORM\Column(type="integer")
     */
    protected $vip;

    /**
     * @ORM\Column(type="string")
     */
    protected $link;

    /**
     * @ORM\Column(type="integer")
     */
    protected $status;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $lang;

    /**
     * @ORM\Column(type="integer")
     */
    protected $grade;

    /**
     * @ORM\Column(type="text")
     */
    protected $key_words;
}
