<?php 

function Add($num1, $num2){
	$str=[$num1,$num2];
	$sum=array_sum($str);
	return $sum;
}
$num1=10;
$num2=10;
echo Add($num1,$num2);



 ?>