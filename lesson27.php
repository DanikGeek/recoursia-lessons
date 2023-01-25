<?php 
echo "Дан массив $arr из 10 случайных чисел от 0 до 100. Поменяйте местами максимальный и минимальный элементы.<br>";
$max=0;
$min=101;
$maxi = 0;
for ($i=0; $i < 10; $i++) { 
	$arr[$i] = rand(0, 100);

		if ($max < $arr[$i]) {
			$max = $arr[$i];
			$maxi = $i;
			
		}
		if ($min > $arr[$i]) {
			$min = $arr[$i];
			$mini = $i;
		}

		
}
// Выводим
print_r($arr);
echo "<br> Макс число ";
echo $max . " ";
echo "<br> Мин число ";
echo $min;
echo "<br>";
echo " Ячейка Max ";
echo $maxi;
echo "<br>";
echo " Ячейка Min ";
echo $mini;
echo "<br>";
$arr[$mini] = $max;
$arr[$maxi] = $min;
print_r($arr); // Меняем местами мин и макс
