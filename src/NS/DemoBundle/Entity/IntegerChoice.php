<?php

namespace NS\DemoBundle\Entity;


/**
 * Description of IntegerChoice
 *
 * @author gnat
 */
class IntegerChoice extends \NS\UtilBundle\Entity\Types\ArrayChoice 
{
    protected $convert_class = '\NS\DemoBundle\Form\Types\IntegerChoice';

    public function getName() 
    {
        return 'IntegerChoice';
    }
}

