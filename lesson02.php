Ссылка на индексную страницу <a href="http://lessons/index.php">Click </a><br>
Ссылка на lesson02 <a href="http://lessons/lesson03.php">Click </a>
<?php 
echo "<br>";

//Вывести слпучайное число от 0 до 100
echo rand(0, 100);
echo "<br>";
//Записать в переменную случайное число и вывести на экаран
$a = rand(0, 100);
echo $a;
echo "<br>";
//Записать в переменную $random случайное число от  -100 до 100 и вывести на экран слово ‘Positive’ если оно положительное, и соответственно ‘Negative’, если - отрицательное
$random = rand(-100, 100);
$random = 0;

if ($random > 0) {
	echo "Positive: " . $random;
}
elseif ($random < 0) {
	echo "Negative: " . $random;
}
else {
	echo "Неопределено 🤷‍♂️😁😜👍";
}
echo "<br><br>";
//Записать в переменные $a, $b, $c случайные числа от -100 до 100. Определить какое из трех чисел максимальное и вывести его на экран.
echo "Новая задача - Записать в переменные a, b, c случайные числа от -100 до 100. Определить какое из трех чисел максимальное и вывести его на экран.";
echo "<br>";
$a = rand(0, 100);
$b = rand(0, 100);
$c = rand(0, 100);
echo "Переменная А: " . $a;
echo "<br>";
echo "Переменная B: " . $b;
echo "<br>";
echo "Переменная C: " . $c;
echo "<br><br><br>";
$max = $a;
echo "Max: ";
echo $max;


echo "<br><br><br>";


if ($max < $b) {
	$max = $b;
}
if ($max < $c) {
	$max = $c;
}
echo $max;