<?php
// Monday, 11th-Aug-2025 - 6:00 AM

// for every element, check if the entered value is 1
// if true, subtract the current position from 2,2 using the absolute value (the coordinates of the center)
// display the total number of steps necessary

const ROWS = 5;
const COLS = 5;
$numOfSteps = null;
// Take in 5 rows of 5 elements
for($i = 0; $i < ROWS; $i++){
    $rows[] = readline();
}

// save input in a 2D array
foreach($rows as $row => $elements){
    $data[] = array_map('intval', explode(' ', $elements));
    $col = array_search(1, $data[$row]);
    
    if($col !== false){
        $numOfSteps = abs(2 - $row) + abs(2 - $col);
        break;
    } else {
        $numOfSteps = -1;
    }
}

echo $numOfSteps;
