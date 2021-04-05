<?php

namespace ExercismBundle\Service;

class Autowalker
{
    // const DIRECTION_NORTH = -0.5;  // pi/2
    // const DIRECTION_EAST = 0;     // cos(pi) * (-1) = -1
    // const DIRECTION_SOUTH = 0.5; // pi / -2
    // const DIRECTION_WEST = 1;     // cos(pi) = -1


    public const DIRECTION_NORTH = [0, 1];
    public const DIRECTION_EAST = [1, 0];
    public const DIRECTION_SOUTH = [0, -1];
    public const DIRECTION_WEST = [-1, 0];


    // position 0 is always the current, followed by next 3 right turns
    private $steeringWheel = array(
        self::DIRECTION_NORTH,
        self::DIRECTION_EAST,
        self::DIRECTION_SOUTH,
        self::DIRECTION_WEST,
    );
    public $position = [0, 0];
    public $direction = [0, 1];

    public function __construct(array $position = [0, 0], array $direction = [0, 1])
    {
        $this->position = $position;
        $this->direction = $direction;
    }



    // public function __construct()
    // {
    //     //
    // }

    public function turnLeft()
    {
        $temp = array_pop($steeringWheel);
        array_unshift($steeringWheel, $temp);
        array_dump($steeringWheel);
        $direction = $steeringWheel[0];
    }

    public function turnRight()
    {
        $temp = array_push($steeringWheel);
        array_shift($steeringWheel, $temp);
        array_dump($steeringWheel);
        $direction = $steeringWheel[0];
    }

    // public function position()
    // {
    //     return '...fudge...';
    // }
}
