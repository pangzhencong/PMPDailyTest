<?php 
$num=4;
$arr=[1,2,3,4,5,6];
function find($num,$arr)
{					//函数定义
	for ($i=0; $i < count($arr); $i++) { 
		if($num==$arr[$i]){
			$num=$num-1;
			echo $num;
		}
	}
}
find($num,$arr);


 ?>