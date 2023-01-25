<?php 
echo "Дан массив $arr из 10 случайных чисел от 1 до 100. Соберите в массив $evens четные числа, а в массив $odds нечетные.<br>";
for ($i=0; $i < 10; $i++) { 
	$arr[$i] = rand(1, 100);

	if ($arr[$i] % 2 == 0) {
		$evens[$i] = $arr[$i];
	}
	else {
		$odds[$i] = $arr[$i];
	}
}
print_r($arr);
echo "<br> Evens четные числа<br>";
print_r($evens);
echo "<br> Odds нечетные числа <br>";
print_r($odds);