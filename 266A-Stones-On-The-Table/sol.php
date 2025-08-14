<?php
// Thursday, 14th-Aug-2025 - 7:12PM

// Take number of stones
// Take the colors of the stones
// Store them in an array
// Create a counter for the stones to remove
// for each char, if the next char is the same increment the counter

$stones = readline();
$colors = str_split(readline());
$currentColor = '';
$counter = 0;

foreach($colors as $index => $color){
    if($color == $currentColor){
        $counter++;
    }
    
    $currentColor = $color;
}

echo $counter;
