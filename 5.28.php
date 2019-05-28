<?php 
$target = 7;
$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];

Find($target,$array);
	function Find($target,$array)
	{	$str=[];
		foreach ($array as $key => $value) {
			foreach ($value as $key => $val) {
				$str[]=$val;
			}
		}
		if($str=$target){
			echo 'true';
		}
		// print_r($str);
	}
	



 ?>