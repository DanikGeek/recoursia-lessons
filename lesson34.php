<?php
echo "Описать функцию addRightDigit($ a, $ b), добавляющую к целому положительному числу $a справа цифру $b ($b лежит в диапазоне 0–9).<br>
Пример: <br>
   $ a = 708; $ b = 2;<br>
   addRightDigit($a,$b) - должна вернуть 7082 <br>";

$a = 708;
$b = 2;

function addRightDigit($a,$b)
{
	return $a . $b;
}
echo addRightDigit($a,$b);