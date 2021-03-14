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
            echo "Called with [$a] and [$b]: MATCH. \n";
            return 0;
        }
        echo "Called with [$a] and [$b]:       MISS! \n";
        return 1;
    }
}
