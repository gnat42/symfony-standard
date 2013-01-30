<?php

namespace NS\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @author gnat
 * @ORM\Entity
 * @ORM\Table
 */
class Demo 
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\Column(name="integer_choice",type="IntegerChoice")
     */
    private $integer_choice;
    
    /**
     * Set id
     *
     * @param integer $id
     * @return Demo
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
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
     * Set integer_choice
     *
     * @param integer $integerChoice
     * @return Demo
     */
    public function setIntegerChoice(\NS\DemoBundle\Form\Types\IntegerChoice $integerChoice)
    {
        $this->integer_choice = $integerChoice;
    
        return $this;
    }

    /**
     * Get integer_choice
     *
     * @return integer 
     */
    public function getIntegerChoice()
    {
        return $this->integer_choice;
    }
}