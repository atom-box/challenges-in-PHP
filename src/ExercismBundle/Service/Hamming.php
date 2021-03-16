<?php

namespace ExercismBundle\Service;

use Symfony\Component\Config\Definition\Exception\Exception;

class Hamming
{
    public function __construct(string $y, string $z)
    {
        $this->y = $y;
        $this->z = $z;
    }

    public function distance()
    {

        if (strlen($this->y) !== strlen($this->z)) {
            throw new Exception('DNA strands must be of equal length.');
            // throw new InvalidArgumentException('DNA strands must be of equal length.');
        }

        $score = 0;
        $basesSense = str_split($this->y);
        $basesAntisense = str_split($this->z);
        for ($i = 0; $i < count($basesSense); $i++) {
            $score += $this->pointMutant($basesSense[$i], $basesAntisense[$i]);
        }
        return $score;
    }

    private function pointMutant(string $a, string $b): int
    {
        if ($a === $b) {
            return 0;
        }
        return 1;
    }
}
