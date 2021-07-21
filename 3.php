<?php
function progresia($arr, $x)
{
	if ($x == 1)
		return true;
	
	sort($arr);
	
	
	$y = $arr[1] - $arr[0];
	for ($i = 2; $i < $x; $i++)
		if ($arr[$i] -	$arr[$i - 1] != $y)
		return false;
	
	return true;
}


$arr = array(2,4,6,8,10);
$x = count($arr);

if(progresia($arr, $x))
echo "Yes";
else
echo "No";
						
?>