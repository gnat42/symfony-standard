<?php

namespace NS\DemoBundle\Form\Types;

use NS\UtilBundle\Form\Types\ArrayChoice;

/**
 * Description of IntegerChoice
 *
 * @author gnat
 */
class IntegerChoice extends ArrayChoice
{
    const FIRST  = 1;
    const SECOND = 2;
    const THIRD  = 3;

    protected $values = array(
                            self::FIRST  => 'First',
                            self::SECOND => 'Second',
                            self::THIRD  => 'Third',
                            );

    public function getName() 
    {
        return 'integer_choice';
    }
}