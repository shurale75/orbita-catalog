<?php

namespace Orbita\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="catalog-users")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=200)
     */
    protected $email;

    /**
     * @ORM\OneToMany(targetEntity="Site", mappedBy="User")
     */
    protected $sites;

}