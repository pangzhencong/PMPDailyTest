<?php 

	function number($number)	
	{	//方法实现
		while($number%2==0){
			$number=$number/2;
		}
		while($number%3==0){
			$number=$number/3;
		}
		while($number%5==0){
			$number=$number/5;
		}
		if($number==1){ //是丑数
			return 1;	//返回值
		}else{ 			//不是丑数
			return 0;	//返回值
		}
	}
	echo number(7);echo "<pre>";
	echo number(16);echo "<pre>";
	echo number(22);

 ?>