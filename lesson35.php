<?php
echo "Описать функцию timeToHMS($ time), определяющую по времени $ time (в секундах) содержащееся в нем количество часов, минут и секунд.
Пример: $ time = 3070 - 00:51:10 <br>"; 
$time = 13790;
function timeToHMS($time)
{
$hours = $time/3600;
$hours = $hours % 3600;
$min = $time/60;
$min = $min%60;
$sec = $time%60;

if ($hours<10) {
	$hours = "0" . $hours;
}
if ($min<10) {
	$min = "0" . $min;
}
if ($sec<10) {
	$sec = "0" . $sec;
}
$timer = $hours . ":" . $min . ":" . $sec;
return $timer;
}
echo timeToHMS($time);