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
        $timeStep = new DateInterval("PT1000000000S");
        // $timeStep['s'] = 1000000000;
        $dateObject->add($timeStep);
        return $dateObject;
    }
}

/*
PSEUDO CODE:
CONVERT TO A SECONDSISH OBJECT
ADD A BILLION SECONDS
CONVERT TO THAT FORMAT (LOOK IT UP)

$date = new DateTime('2000-01-01');
$date->add(new DateInterval('P10D'));
echo $date->format('Y-m-d') . "\n";

*/