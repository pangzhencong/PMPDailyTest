<?php

/**
 * @Author: JYK
 * @Date:   2019-05-14 19:58:33
 * @Last Modified by:   JYK
 * @Last Modified time: 2019-05-15 07:36:52
 */
$arr=[1,2,3,4,5,6];
$len=count($arr);
for($i=0;$i<$len;$i++){
	if($arr[$i]%2==1){
		$res[]=$arr[$i];
	}else{
		$ress[]=$arr[$i];
	}
}
$data=array_merge($res,$ress);
var_dump($data);
echo "<br>";

//两个循环
for($i=0;$i<$len;$i++){
	if($arr[$i]%2==1){
		$a[]=$arr[$i];
	}
}
for($i=0;$i<$len;$i++){
	if($arr[$i]%2!=1){
		$a[]=$arr[$i];
	}
}
var_dump($a);


