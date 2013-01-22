<?php

$l = 10;
for ($i = 1; $i <= $l; $i++)
{
	$som[$i] = $i;
}

$sum = 0;
for($i = 1;$i <= $l; $i++)
{
	$sum = $sum + $som[$i];
}
echo $sum;

?>
