<?php
// Write a program that allows a user to enter an integer and tells them if it is a Harshad number (base10)
function isHarshadNumber(string $input_number): string{
    $digits = str_split($input_number);
    if ($input_number % array_sum($digits) === 0) {
        return $input_number . " is Harshad number";
    }
    return $input_number . " is NOT Harshad number";
}


$input_number = (string)readline('Enter a number to check if it is a deficient, perfect or abundant number: '. PHP_EOL);
echo isHarshadNumber($input_number) . PHP_EOL;

