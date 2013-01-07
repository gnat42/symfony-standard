<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Person
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=244)
     */
    private $name;

    /**
    * @var Practice
    * @ORM\OneToMany(targetEntity="Practice",mappedBy="person")
    */
    private $practices;

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
     * @return Person
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
     * Constructor
     */
    public function __construct()
    {
        $this->practices = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add practices
     *
     * @param \Acme\DemoBundle\Entity\Practice $practices
     * @return Person
     */
    public function addPractice(\Acme\DemoBundle\Entity\Practice $practices)
    {
        $this->practices[] = $practices;
    
        return $this;
    }

    /**
     * Remove practices
     *
     * @param \Acme\DemoBundle\Entity\Practice $practices
     */
    public function removePractice(\Acme\DemoBundle\Entity\Practice $practices)
    {
        $this->practices->removeElement($practices);
    }

    /**
     * Get practices
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPractices()
    {
        return $this->practices;
    }
}