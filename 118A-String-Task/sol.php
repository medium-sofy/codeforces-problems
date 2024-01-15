<?php

$inputstr = strtolower(readline());
$characters = str_split($inputstr);

foreach($characters as $letter){
  if($characters[$letter] == 'a'||'o'||'y'||'e'||'u'||'i')
    continue;
  else  
 $characters[$letter] = ".{$characters[$letter]}";
}
echo implode($inputstr);


