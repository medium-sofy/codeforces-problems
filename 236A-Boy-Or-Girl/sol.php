<?php
// Wednesday, 13th-Aug-2025 - 10:50AM

// initialize an array for unique chars, a char counter.
// Read the username
// push each character into the array containing unique chars
// before each insertion, search the array for an instance of the char
// if it exists, ignore it, else, increment the chars counter
// if the chars counter is odd, print "IGNORE HIM!"
// if even, print "CHAT WITH HER!".

$counter = 0;
$chars[] = '';
$message = '';
$username = '';

$username = str_split(readline());
foreach($username as $char){
    if (array_search($char, $chars))
        continue;
    else {
        $chars[] = $char;
        $counter++;
    }
}

echo $counter % 2 == 0 ? 'CHAT WITH HER!' : 'IGNORE HIM!';