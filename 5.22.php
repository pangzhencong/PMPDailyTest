<?php 
$str="student. a am I";
ReverseSentence($str); 		//函数定义
function ReverseSentence($str){
	$arr=explode(" ", $str);	//方法实现
	$arr=array_reverse($arr);
	$res=implode(" ", $arr);
	// echo "<pre>";
	print_r($res);		//返回值
}


 ?>