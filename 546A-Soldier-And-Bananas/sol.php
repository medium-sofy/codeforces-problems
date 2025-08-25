<?php
// Monday, 25th-Aug-2025 - 4:06PM

// create a variable for first banana price, amount of dollars he has, total bananas to buy
// loop over the number of bananas, for each one multiply the price of the first one by each one's position
// subtract the total price from the amount of dollars he has

// Output
// Output one integer — the amount of dollars that the soldier must borrow from his friend. If he doesn't have to borrow money, output 0.

$dollars = 0;
$bananas = 0;
$firstPrice = 0;
$total = 0;

[$firstPrice, $dollars, $bananas] = array_map('intval', explode(' ', readline()));

for($i = 1; $i <= $bananas; $i++){
    $total += $firstPrice * $i;
}

echo $total < $dollars ? 0 : $total - $dollars;