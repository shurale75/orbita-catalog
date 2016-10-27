<?php

namespace Orbita\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="Orbita\CatalogBundle\Entity\Repository\SiteRepository")
 * @ORM\Table(name="sites")
 * @ORM\HasLifecycleCallbacks()
 */
class Site
{
    public function __construct()
    {
        //$this->setImage('beach.jpg');
        $this->setVip(0);
    }

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
    protected $image = 'beach.jpg';

    /**
     * @ORM\Column(type="integer")
     */
    protected $vip = 0;

    /**
     * @ORM\Column(type="string")
     */
    protected $link;

    /**
     * @ORM\Column(type="integer", nullable=true )
     */
    protected $status = 0;

    /**
     * @ORM\Column(type="datetime", nullable=true )
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $updated;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $lang;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $grade;

    /**
     * @ORM\Column(type="text")
     */
    protected $key_words;

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
     * @return Site
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
     * Set description
     *
     * @param string $description
     * @return Site
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Site
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set vip
     *
     * @param integer $vip
     * @return Site
     */
    public function setVip($vip)
    {
        $this->vip = $vip;

        return $this;
    }

    /**
     * Get vip
     *
     * @return integer 
     */
    public function getVip()
    {
        return $this->vip;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Site
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Site
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set created
     * @ORM\PrePersist
     */
    public function setCreated()
    {
        $this->created = new \DateTime();
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     * @ORM\PreUpdate()
     * @return Site
     */
    public function setUpdated()
    {
        $this->updated = new \DateTime();

    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return Site
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string 
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set grade
     *
     * @param integer $grade
     * @return Site
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return integer 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set key_words
     *
     * @param string $keyWords
     * @return Site
     */
    public function setKeyWords($keyWords)
    {
        $this->key_words = $keyWords;

        return $this;
    }

    /**
     * Get key_words
     *
     * @return string 
     */
    public function getKeyWords()
    {
        return $this->key_words;
    }

    /**
     * Set cat_id
     *
     * @param \Orbita\CatalogBundle\Entity\Category $catId
     * @return Site
     */
    public function setCat(\Orbita\CatalogBundle\Entity\Category $catId = null)
    {
        $this->cat_id = $catId;

        return $this;
    }

    /**
     * Get cat_id
     *
     * @return \Orbita\CatalogBundle\Entity\Category 
     */
    public function getCatId()
    {
        return $this->cat_id;
    }

    public function getCatIdInt()
    {
        return $this->getCatId()->getId();
    }

    /**
     * Set uid
     *
     * @param \Orbita\CatalogBundle\Entity\User $uid
     * @return Site
     */
    public function setUid(\Orbita\CatalogBundle\Entity\User $uid = null)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return \Orbita\CatalogBundle\Entity\User 
     */
    public function getUid()
    {
        return $this->uid;
    }


}
