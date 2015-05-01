<?php
/*
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 */

//Our Number
$a = 600851475143;
//Smallest Prime Factor
$b = 2;
//Largest Prime Factor
$c = 0;

while($a > 1)
{
    //If there is no remainder
    if($a%$b == 0)
    {
        $a=$a/$b;
        $c = $b;
        $b=2;
    }else{
        $b++;
    }
}

echo "$c\n";