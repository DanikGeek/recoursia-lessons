<?php 
echo "Написать функцию divisors(...), которая принимает на вход число $ n и выводит список всех его делителей через запятую. 
<br>Решить задачу с помощью рекурсии. 
<br>Например divisors(6): 1,2,3,6<br>";


function divisors($n, $i)
{	
	if ($i == $n + 1) {
		return 0;
	}
	if ($n % $i == 0) {
		echo $i . ", ";
	}
	if ($n == 0) {
		return 0;
	}
	divisors($n, $i+1);
}
echo "<br>";
echo divisors(100, 1);