<?php
function reverse($x)
 {
    $y = 0;
    while ($x > 0)
      {
        $y = $y * 10;
        $y = $y + $x % 10;
        $x = (int)($x/10);
      }
     return $y;
 }   
print(reverse(12345));
?>
