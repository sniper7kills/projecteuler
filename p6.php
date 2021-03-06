<?php
/*
 * The sum of the squares of the first ten natural numbers is,
 * 1^2 + 2^2 + ... + 10^2 = 385
 * The square of the sum of the first ten natural numbers is,
 * (1 + 2 + ... + 10)^2 = 55^2 = 3025
 * Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640.
 * Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
 */

//Sum of the square for the first 100 natural numbers
$a=0;
for($x=1;$x<=100;$x++)
{
    $a+=pow($x,2);
}

//The square of the sum of the first 100 natural numbers
$b=0;
for($x=1;$x<=100;$x++)
{
    $b+=$x;
}
$b=pow($b,2);

//Find The Difference
echo "The difference between the sum of the squares of the first one hundred natural numbers and the square of the sum is: ".($b-$a)."\n";