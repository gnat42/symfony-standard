<?php

namespace NS\DemoBundle\Service;

class Demo
{
    private $something;
    
    public function setSomething($something)
    {
        $this->something = $something;
    }
    
    public function getSomething()
    {
        return "1st: ".$this->something;
    }
}