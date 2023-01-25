<?php
echo "Написать функцию, принимающую на вход массив и возвращающую сумму всех чисел этого массива.<br>";

$arr = [1,1,1,1,85,87];
$arr1 = [25,63,95];
$rrr = [286,63,95];

function SumArray($mymassiv)
{	
	$sum = 0;
	for ($i = 0; $i < count($mymassiv); $i++) { 
		$sum = $sum + $mymassiv[$i];
	}
	return $sum;
}

print_r(SumArray($arr));
echo "<br>";
echo SumArray($arr1);
echo "<br>";
echo SumArray($rrr);
