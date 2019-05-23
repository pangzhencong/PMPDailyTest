<?php 
	function Sum_Solution($n)
	{
		$num=range(1,$n);
		$str=array_sum($num);
		echo $str;
	}
	Sum_Solution(5);

 ?>