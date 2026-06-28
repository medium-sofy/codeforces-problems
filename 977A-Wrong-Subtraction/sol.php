<?php

// Friday, 19-Sep-2025 - 3:12PM

// Take input (the number to subtract, number of subtraction operations
// )
// while the number is not a single digit
// if the result of dividing the number by 10 results in a number with a decimal point (meaning the last number isn't 0)
// then subtract 1 from the number
// if the result of dividing the number by 10 results in a number without a decimal point ()
// proceed to the next loop (do nothing as we divided the number by 10 as intended)

// 2nd Attempt: Saturday, 20th-Jun-2026 - 6:22PM

[$num, $sub] = array_map('intval', explode(' ', readline()));

for($i = 0; $i < $sub; $i++){
	if($num % 10 != 0)
		--$num;
	else 
		$num /= 10;
}

echo $num;