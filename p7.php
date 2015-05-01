<?php
/*
 * By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
 * What is the 10 001st prime number?
 *
 * At This Point I'm looking at all of these from a programing point of vew and no longer a mathematical point of vew.
 *
 * As such there may be functions and calls to speed up the basic mathematics of things.
 */

$primeNumbers=[2];

$x=3;

// Setup some init variables
while(count($primeNumbers)<=10000)
{
    if(is_prime($x))
    {
        $primeNumbers[]=$x;
    }
    $x ++;
}

//Remember Arrays Start at 0
echo "The 10001'st prime number is: ".$primeNumbers[10000]."\n";


/**
 * @param $number
 * @return bool
 */
function is_prime($number)
{
    // 1 is not prime
    if ( $number == 1 ) {
        return false;
    }
    // 2 is the only even prime number
    if ( $number == 2 ) {
        return true;
    }
    // square root algorithm speeds up testing of bigger prime numbers
    $x = sqrt($number);
    $x = floor($x);
    for ( $i = 2 ; $i <= $x ; ++$i ) {
        if ( $number % $i == 0 ) {
            break;
        }
    }

    if( $x == $i-1 ) {
        return true;
    } else {
        return false;
    }
}