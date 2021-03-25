<?php

namespace ExercismBundle\Service;

class Robot
{
    private $name;

    private $unavailables = [];

    public function __construct()
    {
        $this->name = '';
    }

    public function getName()
    {
        if (!$this->name) {
            $this->name = $this->makeName();
        }
        return $this->name;
    }

    public function reset()
    {
        return 'fudgie thee whale';
    }

    private function makeName()
    {
        $this->name = '';
        do {
            $this->name .= $this->bigChar();
            $this->name .= $this->bigChar();
            $this->name .= $this->decimal();
            $this->name .= $this->decimal();
            $this->name .= $this->decimal();
        } while (false);
        $unavailables[] =  $this->name;
        return $this->name;
    }

    private function bigChar()
    {
        $char = chr(random_int(65, 90));
        return  $char;
    }

    private function decimal()
    {
        $char = chr(random_int(48, 57));
        return $char;
    }
}
