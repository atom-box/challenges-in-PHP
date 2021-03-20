<?php

namespace ExercismBundle\Service;

use DateInterval;
use DateTimeImmutable;

class  TimeExercism
{
    public function __construct()
    {
        // empty.  okay to be empty
    }

    public function from(DateTimeImmutable $dateObject)
    {
        // $timeStep = new DateInterval("PT1000000000S");
        $theGiga = 1000000000000;
        $timeStep = $this->stringifyTimeInt($theGiga);
        // $timeStep = return new DateInterval('PT45M');
        $dateObject = $dateObject->add($timeStep);
        return $dateObject;
    }
    // wow this part is cool; copied it from somewhere!
    function stringifyTimeInt($secs)
    {
        $bit = array(
            'y' => $secs / 31556926 % 12,
            'w' => $secs / 604800 % 52,
            'd' => $secs / 86400 % 7,
            'h' => $secs / 3600 % 24,
            'm' => $secs / 60 % 60,
            's' => $secs % 60
        );

        $cobbled = 'PT130000S';
        return new DateInterval($cobbled);
    }
}

/*
PSEUDO CODE:
TODO

$date = new DateTime('2000-01-01');
$date->add(new DateInterval('P10D'));
echo $date->format('Y-m-d') . "\n";

*/