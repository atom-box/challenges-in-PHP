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
        $timeStep = $this->time_elapsed($theGiga);
        var_dump($timeStep);
        die;


        $dateObject->add($timeStep);
        return $dateObject;
    }
    // wow this part is cool; copied it from somewhere!
    function time_elapsed($secs)
    {
        $bit = array(
            'y' => $secs / 31556926 % 12,
            'w' => $secs / 604800 % 52,
            'd' => $secs / 86400 % 7,
            'h' => $secs / 3600 % 24,
            'm' => $secs / 60 % 60,
            's' => $secs % 60
        );

        foreach ($bit as $k => $v)
            if ($v > 0) $ret[] = $v . $k;

        return join(' ', $ret);
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