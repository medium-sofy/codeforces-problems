<?php
//https://codeforces.com/problemset/problem/339/A

$input = explode("+",readline());

for($i = 0; $i < count($input); $i++){
  for($j = $i+1; $j < count($input); $j++){

    if($input[$i] > $input[$j])
    {
      $temp = $input[$i];
      $input[$i] = $input[$j];
      $input[$j] = $temp;
    }
    
  }
}

echo $output = implode("+",$input);
