Ссылка на новый файл <a href="http://lessons/lesson02.php">Click </a>
<?php
//echo 'hi!';
#AND: && - И
#OR: || - Или
echo '<br>';
$a = 5;
$b = 4;
$c = $a+$b;
echo 'Переменная С = ';
echo $c;
echo '<br>';
if ($c < 9 OR $b > 3) {
    echo 'Yahooo!';
}
else {
    echo 'Nooooo';
}

for ($i=0; $i < 10; $i=$i+1) { 
	echo "$i";
}
