<?php
/* TASK 1.1
A math teacher gives his students the following problem:
Solve the following three tasks and create three more in the same
style:
364 * 2475 = x
308 * 2925 = x
165 * 5460 = x
The students quickly realize that the factor is always 900900.
The lazy teacher doesn’t want to calculate every single equation the students have come up with.
Therefore, he prefers a list of all possible products of two factors that add up to 900900, in ascending
order by the first factor, where the first factor should always be smaller than the second factor.
900900 = 1 * 900900
= 2 * 450450
= 3 * 300300
…
Write a program that outputs such a list so that the lazy teacher can quickly check the correct results.*/

$product = 900900;
$first_factor = [];
$second_factor = [];

// Looping through all solutions
for ($i = 1; $i < $product; $i++){
/*
 *   We know that x = y * z is same x = z * y
 *   We check if y > z in order factors cannot change places (repeat)
 *   Each array has built in pointer at the end of array this improves performance
 */
    if (end($first_factor) > end($second_factor)) {
        break;
    }

// Using modulo operator we can check if a number is divisible by the iterator
    if ($product % $i === 0) {
    /*
     * We assign all factors to a new array as key value pair
     * We know this allocates more memory, but it is good trade off for performance
     */
        $first_factor[] = $i;
        $second_factor[] = ($product / $i);
    }
}
// Combine two arrays into key => value
$factors = array_combine($first_factor, $second_factor);
foreach ($factors as $key => $value) {
    printf("900900 = %d * %d%s", $key, $value, PHP_EOL);
}
