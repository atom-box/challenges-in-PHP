<?php

namespace ExercismBundle\Service;

use ExercismBundle\Service\RobotDB;

require_once('RobotDB.php');

class Robot
{
    private $name;

    private $unavailables;

    public function __construct()
    {
        $this->name = '';
        $this->unavailables = $this->getDB();
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
        $this->name = $this->makeName();
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
        } while (in_array($this->name, $this->unavailables));
        $this->unavailables[] =  $this->name;
        echo implode('-', $this->unavailables) . ' is size of UNAVAILABLES array.' . "\n";
        // echo count($this->unavailables) . ' is size of UNAVAILABLES array.' . "\n";
        return $this->name;
    }

    private function getDB(): array
    {
        return ['r', 't', 'c', 's'];
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
