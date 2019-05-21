<?php 
$array=[2,7,3,4,3,3,7,5];
function number($array){	//函数定义
	$count=array_count_values($array);
	foreach ($count as $key => $value) {	//方法实现
		if($value==1){
			$new_arr[]=$key;
		}
	}
	return $new_arr;		//返回值
}
var_dump(number($array));


 ?>