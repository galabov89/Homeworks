<?php

//Days in the month
$num_of_days = date('t');

// Today day beginning
$today = date("Y-n-");

for( $i=1; $i<= $num_of_days; $i++){
    $today = $today.(string)$i;
    if(date('l', strtotime( $today)) == 'Sunday'){
        echo date('jS F, Y', strtotime($today))."\n";
    }

    $today = date("Y-n-");
}
