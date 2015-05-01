<?php
/*
 * Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be:
 * 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
 * By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.
 */

// init the sum
$sum = 0;

// setup two holding values for the last two sequence numbers
// Lets also init them so we can automate the process of generating the sequence
$a = 0;
$b = 1;

// init the current sequence number
$current = 0;

//Ensure that we don't add numbers over 4 Mil
while($current < 4000000)
{
    //Generate the Next number in the sequence
    $current = $a + $b;
    //Update our holding values
    $a = $b;
    $b = $current;

    //Check if the current number is even. (if remainder is 0 when divided by 2, its even)
    if($current % 2 == 0)
    {
        //Update the sum
        $sum+=$current;
    }
}

echo "The sum of all even Fibonacci sequence numbers whose values do not exceed four million is: ".$sum."\n";