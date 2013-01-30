<?php

namespace NS\DemoBundle\Form\Types;

use NS\UtilBundle\Form\Types\ArrayChoice;

/**
 * Description of IntegerChoice
 *
 * @author gnat
 */
class IntegerChoiceList extends \Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList
{
    protected function fixIndex($index)
    {
        if($index instanceof \NS\DemoBundle\Entity\IntegerChoice)
            return (int)$index->getValue ();
        else
            return parent::fixIndex ($index);
    }
}