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
        $theGiga = 1000000000;
        $timeStep = $this->stringifyTimeInt($theGiga);
        $dateObject = $dateObject->add($timeStep);
        return $dateObject;
    }
    // wow this part is cool; copied it from somewhere!
    function stringifyTimeInt($secs)
    {
        $bit = array(
            'y' => (int)($secs / 31556926),
            'd' => $secs % 31556926 / 86400,
            's' => $secs  % 31556926 % 86400,
        );

        $cobbled = 'P' . $bit['y'] . 'Y' . $bit['d'] . 'D' . 'T' . $bit['s'] . 'S';
        echo ($cobbled . "\n");
        die;
        return new DateInterval($cobbled);
    }
}

/*
PSEUDO CODE:
TODO

$date = new DateTime('2000-01-01');
$date->add(new DateInterval('P10D'));
echo $date->format('Y-m-d') . "\n";

BIG surprise.  The method acts totally different on date immutable.
Really frustrating that PHP haphazardly mixes mutable and immutable.

This challenge was cool
1) forced you to dig in docs from PHP
2) one type was immutable! Acted totally unexpectedly!
3) the calculations and algebra were interesting.

For a free PHP tutorial I am really getting my money's worth.
#100DaysOfCode
*/