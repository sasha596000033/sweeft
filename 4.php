<?php
function zero (&$arr, $x)
{
	$count = 0;

	for ($i = 0; $i < $x; $i++)
		if ($arr[$i] != 0 )
		$arr[$count++] = $arr[$i];

	while ($count < $x)
		$arr[$count++] = 0;
		
	while ($arr % 10 == 0)	
	$count++ ;
	
}

$arr = array(1 , 0 , 30 , 1 , 0 , 9);
$x = sizeof($arr);
zero ($arr, $x);

for ($i = 0; $i < $x; $i++)
echo $arr[$i] . " ";

?>
