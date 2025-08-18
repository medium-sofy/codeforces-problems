<?php
// Second try: Monday, 18th-Aug-2025 - 11:40pm

$characters = str_split(strtolower(readline()));
$vowels = 'aouyei';
$characters = array_filter($characters, fn($char) => !str_contains($vowels, $char));

// foreach($characters as $index => $character){
//  $characters[$index] = ".{$characters[$index]}";
// }

$characters = array_map(fn($char) => ".{$char}", $characters);
echo implode($characters);