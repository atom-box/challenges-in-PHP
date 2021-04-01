<?php

namespace ExercismBundle\Service;

class Autowalker
{
    const DIRECTION_NORTH = [0, 1];
    const DIRECTION_SOUTH = [0, -1];
    const DIRECTION_EAST = [1, 0];
    const DIRECTION_WEST = [-1, 0];

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

    // public function turnLeft()
    // {
    //     return '...fudge...';
    // }

    // public function position()
    // {
    //     return '...fudge...';
    // }
}
