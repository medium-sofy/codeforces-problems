<?php

$inputstr[]= explode(" ",strtolower(readline()));
$outputstr[]=0;
foreach($inputstr as $letter){
  if($letter === "a"||"o"||"y"||"e"||"u"||"i")
  continue;
else 
$outputstr[$letter] = ".{$letter}";
}

echo $result = implode("",$outputstr);