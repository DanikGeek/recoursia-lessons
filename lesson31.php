<?php
echo "Написать функцию, которая принимает на вход массив и возвращает максимальное число из этого массива.<br>";

$arr = [111,250,540,940,12,620];


function SumArray($mymassiv)
{	
	$sum = 0;
	for ($i = 0; $i <= $mymassiv[$i]; $i++) { 
		if ($sum <= $mymassiv[$i]) {
			$sum = $mymassiv[$i];
		}
		
	}
	return $sum;
}

echo SumArray($arr);

	