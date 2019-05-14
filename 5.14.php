<?php 
	//函数定义
	function cls($num){
		//方法实现
		if($num==1){
			return 1;		//返回值
		}else if($num==2){
			return 2;
		}else{
			return cls($num-1)+cls($num-2);
		}
	}
	echo cls(10);






 ?>