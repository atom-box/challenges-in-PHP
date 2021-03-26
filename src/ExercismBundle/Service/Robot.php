<?php

namespace ExercismBundle\Service;

use Nameable;

require_once('RobotDB.php');
require_once('Nameable.php');

class Robot
{
    private $name;

    static private $retiredNames = [];

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
        } while (in_array($this->name, self::$retiredNames));
        self::$retiredNames[] =  $this->name;

        echo count(self::$retiredNames) . ' is size of retiredNames array.' . "\n";
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
