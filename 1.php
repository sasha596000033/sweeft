<?php
function fibonachi($y){

	$x1 = 0;
	$x2 = 1;

	$count = 0;
	while ($count < $y)
	{
		echo ' '.$x1;
		$x3 = $x2 + $x1;
		$x1 = $x2;
		$x2 = $x3;
		$count = $count + 1;
	}
}

$y = 5;
fibonachi($y);
?>