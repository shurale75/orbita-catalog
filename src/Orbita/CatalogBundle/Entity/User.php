<?php

namespace Orbita\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Orbita\CatalogBundle\Entity\Repository\UserRepository")
 * @ORM\Table(name="users")
 * @ORM\HasLifecycleCallbacks()
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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sites = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add sites
     *
     * @param \Orbita\CatalogBundle\Entity\Site $sites
     * @return User
     */
    public function addSite(\Orbita\CatalogBundle\Entity\Site $sites)
    {
        $this->sites[] = $sites;

        return $this;
    }

    /**
     * Remove sites
     *
     * @param \Orbita\CatalogBundle\Entity\Site $sites
     */
    public function removeSite(\Orbita\CatalogBundle\Entity\Site $sites)
    {
        $this->sites->removeElement($sites);
    }

    /**
     * Get sites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSites()
    {
        return $this->sites;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
