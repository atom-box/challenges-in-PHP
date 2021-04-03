<?php

namespace ExercismBundle\Service;

class Autowalker
{
    const DIRECTION_NORTH = [0, 1];
    const DIRECTION_EAST = [1, 0];
    const DIRECTION_SOUTH = [0, -1];
    const DIRECTION_WEST = [-1, 0];

    // position 0 is always the current, followed by next 3 right turns
    private $steeringWheel = array(
        DIRECTION_NORTH,
        DIRECTION_EAST,
        DIRECTION_SOUTH,
        DIRECTION_WEST,
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
