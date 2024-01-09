<?php
// https://codeforces.com/contest/112/problem/A

// Normalize all input to lowercase
$s1 = strtolower(readline());
$s2 = strtolower(readline());

if($s1 > $s2)

  echo "1\n";

elseif($s1 < $s2)
 
  echo "-1\n";

else 

  echo "0\n";