<?php 
echo "Дано случайное четное число n (1000, 9998). Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится?<br> Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла), и запишите его в переменную num.<br><br>";

$num =0;
$n =rand(1000, 9998);
if ($n % 2 != 0) {
	$n = $n +1;
}
//**********************************
echo $n . " <strong>Случайное число</strong><br>";
for ($i=$n; $i > 25; $i= $i / 2) { 
	echo $i . " <br>";
	$num = $num +1;
}
echo $num . " <strong>Количество итераций</strong>";