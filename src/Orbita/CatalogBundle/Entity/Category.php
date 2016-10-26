<?php

namespace Orbita\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Orbita\CatalogBundle\Entity\Repository\CategoryRepository")
 * @ORM\Table(name="categories")
 * @ORM\HasLifecycleCallbacks()
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Site", mappedBy="Category")
     */
    protected $sites;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="string")
     */
    protected $tags;
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
     * Set title
     *
     * @param string $title
     * @return Category
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return Category
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Add sites
     *
     * @param \Orbita\CatalogBundle\Entity\Site $sites
     * @return Category
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
        return $this->getTitle();
    }
}
