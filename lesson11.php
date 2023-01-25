<?php
$a = 7;
$b = 5;
$arr = [23, " hello world", 45];
echo $arr [0] . "<br>";
echo $arr [1] . "<br>";
echo $arr [2] . "<br>";
$arr [3] = 56;//Добавление в массив нового индекса 3
echo $arr [3] . "<br>";
$arr [] = 91; //Автоматическое добавление последующего индекса
echo $arr [4] . "<br>";
echo $arr [] = [1, 2, "Code Guru", 4, 5];
print_r($arr) . "<br><br>";
echo "<br><br>" . $arr [5][2];
echo "<br><br><br><br>";
$as = [rand(1, 100), rand(1, 100), rand(1, 100) ];
print_r($as);