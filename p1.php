<?php
/*
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
 * Find the sum of all the multiples of 3 or 5 below 1000.
 */

//init the sum to 0.
$sum = 0;

//Go through all numbers from 0 to 1000
for($x=1;$x<1000;$x++)
{
    //check if the the remainder is 0 if divided by 3 or 5 (that means its a multiple)
    if($x%3==0 || $x%5==0)
    {
        //if it is, add it to the sum
        $sum+=$x;
    }
}

//output the answer
echo "The sum of all natural numbers that are a multiple of 3 or 5 and bellow 1000 is: ".$sum."\n";