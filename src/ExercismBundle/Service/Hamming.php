<?php

namespace ExercismBundle\Service;

class Hamming
{
    public function __construct(string $y, string $z)
    {
        $this->y = $y;
        $this->z = $z;
    }

    public function distance(): int
    {

        return 333;
    }

    private function pointMutant(string $a, string $b): bool
    {
        if ($a === $b) {
            return 0;
        }
        return 1;
    }
}
