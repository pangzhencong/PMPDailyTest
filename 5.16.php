<?php 

print_r(index(1000,13000));
	function index($k,$v){
		$data=[];
		for ($i=$k; $i <= $v; $i++) {  		//方法实现
			$data[]=substr_count($i, 1); //函数定义
		}
		echo "出现的次数是".array_sum($data)."次";
	}





 ?>