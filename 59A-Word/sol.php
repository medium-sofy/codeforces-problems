<?php
// Monday, 25th-Aug-2025 - 6:16PM

// Get the word
// Split it into individual characters
// count the number of upper case letters
// compare the number of uppercase letters to the total word lenght
// if the number of uppercase letters is greater than the number of lowercase letters
// print the uppercase version of the word
// else if the number of lowercase letters is greater or equal to the number of uppercase letters
// print the lowercase version of the word

$word = readline();
$upperLetters = 0;

foreach(str_split($word) as $char){
    ctype_upper($char) ? $upperLetters++ : '';
}

echo $upperLetters > strlen($word) - $upperLetters ? strtoupper($word) : strtolower($word);
