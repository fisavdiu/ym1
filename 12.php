<?php
/* Write a program that allows a user to enter an integer and tells them if it is a deficient, perfect or
abundant number. */
function findAllProperDivisors(int $number): array {
    $first_factor = [];
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i === 0) {
            $first_factor[] = $i;
        }
    }
    return $first_factor;
}

$input_number = (int)readline('Enter a number to check if it is a deficient, perfect or abundant number: '. PHP_EOL);

$divisors = findAllProperDivisors($input_number);
$sum_of_divisors = array_sum($divisors);

switch ($input_number) {
    case $input_number > $sum_of_divisors:
        print $input_number . " is Deficient number" . PHP_EOL;
        break;
    case $input_number < $sum_of_divisors:
        print $input_number . " is Abundant number" . PHP_EOL;
        break;
    case $input_number === $sum_of_divisors:
        print $input_number . " is Perfect number" . PHP_EOL;
        break;
}


