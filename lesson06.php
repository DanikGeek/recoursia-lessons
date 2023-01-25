<?php
$k = rand(1, 100);
//$k = 5;
$gody = "лет";
if ($k == 1 OR $k == 21 OR $k == 31 OR $k == 41 OR $k == 51 OR $k == 61 OR $k == 71 OR $k == 81 OR $k == 91) {
	$gody = "год";
} 
elseif ($k > 1 AND 
	$k < 5 OR 
	$k > 21 AND 
	$k < 25 OR
	$k > 31 AND 
	$k < 35 OR
	$k > 41 AND 
	$k < 45 OR
	$k > 51 AND 
	$k < 55 OR
	$k > 61 AND 
	$k < 65 OR
	$k > 71 AND 
	$k < 75 OR
	$k > 81 AND 
	$k < 85 OR
	$k > 91 AND 
	$k < 95 ) {
	$gody = "года";
}

else {
$gody = "лет";
}

echo "Мне " . $k . " " . $gody;
