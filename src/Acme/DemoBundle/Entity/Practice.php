<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Practice
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Practice
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
    * @var Person
    * @ORM\ManyToOne(targetEntity="Person",inversedBy="practices")
    */
    private $person;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->name;
    }
    /**
     * Set name
     *
     * @param string $name
     * @return Practice
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
     * Set person
     *
     * @param \Acme\DemoBundle\Entity\Person $person
     * @return Practice
     */
    public function setPerson(\Acme\DemoBundle\Entity\Person $person = null)
    {
        $this->person = $person;
    
        return $this;
    }

    /**
     * Get person
     *
     * @return \Acme\DemoBundle\Entity\Person 
     */
    public function getPerson()
    {
        return $this->person;
    }
}
