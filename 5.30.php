<?php 

function NumberOf1($n)	//函数定义
{
	$num=decbin($n);	//方法实现
	$str=substr_count($num, '1');
	return $str;	//返回值
}
echo NumberOf1(10);




 ?>