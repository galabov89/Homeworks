<?php

// Today's date
$today = getdate();
//print_r($today);

// Check if the year is leap or not
$numDays = 0;
$leap = date('L', mktime(0, 0, 0, 1, 1, $today['year']));
if($leap == 1){
    $numDays = 366;
}
elseif($leap == 0){
    $numDays = 365;
}

//left time from today
$hoursLeft = 0;
$minutesLeft =0;
$secondsLeft = 0;


if($today['minutes']==60 || $today['minutes']==0){
    $hoursLeft = 23-$today['hours'];
    $minutesLeft = $hoursLeft*60;
    if($today['seconds']==60 || $today['seconds']==0){
        $secondsLeft = $minutesLeft*60;
    }
    else{
        $secondsLeft = (60- $today['seconds'])+$minutesLeft*60;
    }
}
else{
    $hoursLeft = 23-$today['hours']-1;
    $minutesLeft = (60-$today['minutes'])+$hoursLeft*60;
    if($today['seconds']==60 || $today['seconds']==0){
        $secondsLeft = $minutesLeft*60;
    }
    else{
        $secondsLeft = (60- $today['seconds'])+$minutesLeft*60;
    }
}

//echo $hoursLeft."\n";
//echo $minutesLeft."\n";
//echo $secondsLeft."\n";

$hours = 0;
$minutes = 0;
$seconds = 0;

for($i =0 ; $i < $numDays-$today['yday']; $i++){
    $hours+=24;
    $minutes+=24*60;
    $seconds+=24*60*60;
}

$sumHours = $hours+$hoursLeft;
$sumMinutes = $minutes+$minutesLeft;
$sumSeconds = $seconds+$secondsLeft;

echo 'Hours until new year: '.$sumHours."\n";
echo 'Minutes until new year: '.$sumMinutes."\n";
echo 'Seconds until new year: '.$sumSeconds."\n";

$days = $numDays-$today['yday'];
$hours = $sumHours%24;
$minutes = $sumMinutes%60;
$seconds = $sumSeconds%60;

echo'Days:Hours:Minutes:Seconds '.$days.":".$hours.":".$minutes.":".$seconds;