<?php
/*Условие задачи:
Учитывая разный диапазон высот слоев атмосферы, НЛО чаще всего будет оказываться в экзосфере. Перепишите сценарий программы из задачи 2 таким образом, чтобы НЛО могло появляться в каждом слое атмосферы с равной вероятностью. Выводить ответ в таком же виде как и в предыдущей задаче.*/


$s = rand(1, 5);
if ($s == 1) {
	$s = rand(700, 1500);
} 
elseif ($s == 2) {
	$s = rand(80, 699);
} 
elseif ($s == 3) {
	$s = rand(50, 79);
} 
elseif ($s == 4) {
	$s = rand(6, 49);
} 
elseif ($s == 5) {
	$s = rand(0, 5);
} 


echo "Высота: " . $s . " км"; // Начало предложения

if ($s > 699) {
	$s = "Экзосфера (700 - 1500 км)";
} 
elseif ($s < 700 AND $s > 79) {
	$s = "Термосфера (80 - 700 км)";
} 
elseif ($s < 80 AND $s > 49) {
	$s = "Мезосфера (50 - 80 км)";
} 
elseif ($s < 50 AND $s > 5) {
	$s = "Стратосфера (6 - 50 км)";
} 
elseif ($s < 6 AND $s > 0) {
	$s = "Тропосфера (0 - 6 км)";
} 
elseif ($s == 0) {
	$s = "Тропосфера (0 - 6 км)";
} 

echo " - это " . $s; // Конец предложения