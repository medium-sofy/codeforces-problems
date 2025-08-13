<?php
// Wednesday, 13th-Aug-2025 - 11:41AM

// take input 
// while l < b:
// multiply l * 3, b * 2
// increment years counter on each step
// echo years counter

[$limak, $bob] = array_map('intval', explode(' ', readline()));
$years = 0;

while($limak <= $bob)
{
    $limak *= 3;
    $bob *= 2;
    $years++;
}

echo $years;