<?php
//$a, $b
//return $a + $b;
echo "Написать функцию, принимающую на вход массив и возвращающую сумму всех чисел этого массива.<br>";
function randArray() 
{
	$arr = [];
	for ($i=0; $i < 10; $i++) { 
		$arr[$i] = rand (0, 100);
	}
	return $arr;
}
print_r(randArray());
//print_r($arr);

