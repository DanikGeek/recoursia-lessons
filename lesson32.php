<?php 
echo "Написать функцию, принимающую в качестве аргумента массив и возвращающая с этого массива массив с только четными числами.<br>";
$arr = [1,2,3,4,5,6,7,8,9];


function SumArray($mymassiv)
{	
	
	for ($i = 0; $i <= $mymassiv[$i]; $i++) { 
		if ($mymassiv[$i] % 2 == 0) {
		 	$arr2[$i] = $mymassiv[$i];
		 } 
	
	}
	return $arr2;
}
print_r(SumArray($arr));
