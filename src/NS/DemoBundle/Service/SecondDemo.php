<?php

namespace NS\DemoBundle\Service;

class SecondDemo
{
    private $something;
    
    public function setSomething($something)
    {
        $this->something = $something;
    }
    
    public function getSomething()
    {
        return "2nd: ".$this->something;
    }
}