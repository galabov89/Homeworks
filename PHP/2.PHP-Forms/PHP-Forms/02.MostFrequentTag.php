<?php
$input = 'Pesho, homework, homework, exam, course, PHP';
$tags = explode(", ", $input);
$uniqueTags = array();
$isThere = true;
$pairs = array();

//Getting only unique tags
for($i=0; $i< count($tags);$i++){
    $tag = $tags[$i];
    foreach ($uniqueTags as $unique) {
        if($tag == $unique){
            $isThere = false;
            break;
        }
    }

    if($isThere){
        array_push($uniqueTags, $tag);
    }
    $isThere = true;
}

// Making an associative array of tags and frequencies
$mostOften = 0;
$oftenTag = ' ';
foreach ($uniqueTags as $unique) {
    $count = 0;
    foreach ($tags as $tag) {
        if($unique == $tag){
            $count++;
        }
    }

    if($count > $mostOften){
        $mostOften = $count;
        $oftenTag = $unique;
    }

    $pairs[$unique] = $count;
}

//Sorting by frequency
arsort($pairs);

foreach ($pairs as $key => $value) {
    echo "{$key} : {$value} times\n";
}
echo "Most Frequent Tag is {$oftenTag}";

