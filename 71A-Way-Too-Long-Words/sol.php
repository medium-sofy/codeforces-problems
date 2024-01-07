<?php 
//https://codeforces.com/contest/71/problem/A

// too long if length > 10
// all long words are printed with only first and last letter
// between first and last letter: length - 2
// Input: n for n words
// output: first and last letters and sum of middle letters in between

$counter = readline();
//Get a list of words from user
for($i = 0; $i < $counter; $i++)
  $words[$i] = readline();


foreach($words as $word)
{
  $wordLength = strlen($word);
  $lastLetter = $wordLength - 1;
  $middleCharSum = $wordLength -2; 

  if($wordLength > 10)
  {
    $word = "$word[0]" . "$middleCharSum" . "$word[$lastLetter]";
    echo "$word\n"; 
  }

  else echo "$word\n"; 
}
