<?php
$input = 'Pesho, homework, homework, exam, course, PHP';
$tags = explode(", ", $input);

for($i=0; $i< count($tags);$i++){
    echo"{$i}:{$tags[$i]}"."\n";
}