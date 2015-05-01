<?php
 
$char_count=0;
 
//Number To British English
function num2brit($number)
{
	$n2t = new NumberFormatter("en", NumberFormatter::SPELLOUT);
	$out = "";
	//Thousands
	if($number/1000 > 1)
	{
		$out .= $n2t->format(floor($number/1000))." Thousand ";
		if($number%1000 > 0)
			$out .= "And ";
		$number=$number%1000;
	}
	//Hundreds
	if($number/100 > 1)
	{
		$out .= $n2t->format(floor($number/100))." Hundred ";
		$number=$number%100;
		if($number%100 > 0)
			$out .= "And ";
		$number=$number%100;
	}
	if($number > 0)
	{
		$out .= $n2t->format($number);
	}
	
	return $out;
}
 
//This part works for the most part. We just were using American English not British English....
 
for($x=1;$x<=1000;$x++)
{
	//Converts the number to text format
	$text =  num2brit($x);
	
	//Keep only A-Z and a-z, get rid of spaces and tack's (-)
	$text = preg_replace("/[- ]/", '', $text);
	
 
	//Creates an array with ascii code as the Key and the number of times as the value
	$array = count_chars($text,1);
	foreach($array as $key => $value)
	{
		$char_count+=$value;
	}
}
 
echo "There are ".$char_count." Characters total when adding them all up from one to one thousand";
 
?>
