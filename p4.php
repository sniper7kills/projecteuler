<?php
/*
 * A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */

/**
 * @param $x
 * @return bool
 */
function ispalindrome($x)
{
    $forwards = (string)$x;
    $backwards = "";
    for($x=strlen($x)-1;$x>=0;$x--)
    {
        $backwards.= substr ( $forwards, $x, 1 );
    }
    echo $forwards." :: ".$backwards."\n";
    if($forwards == $backwards)
    {
        return true;
    }else{
        return false;
    }
}



//init our answer
$palindrome = 0;
for($x=999;$x>0;$x--)
{
    for($y=999;$y>0;$y--)
    {
        if(ispalindrome($x*$y))
        {
            if($x*$y > $palindrome)
                $palindrome=$x*$y;
        }
    }
}

echo $palindrome;