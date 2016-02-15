<?php 

function gcd($a, $b)
{
	$a = abs($a);
	$b = abs($b);

	if($a + $b == 0)
	{
		return "0";
	}
	else
	{
		while($a > 0)
		{
			$c = $a;
			$a = $b % $a;
			$b = $c;
		}
	}

	return $c;
}

echo "Greatest common divisor of 12 and 21 is ".gcd(12,21).".";

?>