<?php

$num = 145;
$stack = array();
$noNumber = true;

for($k = 0; $k<=$num; $k++){

    $str = (string)$k;
    $notmatching = true;

    for($i = 0; $i<strlen($str)-1; $i++){
        for($j = $i+1; $j<strlen($str); $j++){
            if($str[$i]==$str[$j]){
                $notmatching = false;
                break;
            }
        }

    }

    if($notmatching && strlen($str)>2){
        array_push($stack,$k);
        $noNumber = false;
       // echo $k."\n";
    }

    $notmatching = true;
}

if($noNumber){
    echo 'no';
}
else{
    echo join(", ",$stack);
}
