<?php 
echo "Дан массив $arr из 20 случайных чисел (0 или 1). Найдите длину самой длинной цепочки повторяющихся чисел в данном массиве.<br> 
К примеру в массиве [0, 0, 1, 1, 0, 0, 0, 0, 1, 1, 0], длина самой длинной цепочки будет 4 .<br>";


$count = 0;
$sum =0;
for ($i = 0; $i < 20; $i++) { 
	$arr[$i] = rand(0, 1);

	if ($arr[$i] == $arr[$i - 1] ) {
		$count = $count +1;
	}

	
	if ($arr[$i] != $arr[$i - 1] ) {
		$count = 1;
	}
	
	if ($sum < $count) {
		$sum = $count;
	}	
}
echo "<br>";
print_r($arr);
print_r($arr1);
echo "<br> <strong>Длина самой длинной цепочки будет " . $sum . "</strong><br>";