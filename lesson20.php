<?php
$arr = [];
$arr[0] = rand(1, 10);

for ($i=0; $i < 10; $i++) { 
	$arr[$i] = rand(1, 10);
}
print_r($arr);