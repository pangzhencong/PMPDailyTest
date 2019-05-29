<?php 

$arr_A=[1,3,6,9]; 
$arr_B=[2,4,5,8,20];
var_dump(Combine($arr_A, $arr_B));
function Combine($arr_A, $arr_B)
{
	for ($i=0; $i < count($arr_B); $i++) { 
		$arr_A[]=$arr_B[$i];
	}
	// return $arr_A;
	$data=$arr_A;
	$len=count($data);
	// return $len;
	for ($j=0; $j < $len; $j++) { 
		for ($o=1; $o < $len-$j; $o++) { 
			if($data[$o-1]>$data[$o]){
				$ten=$data[$o];
				$data[$o]=$data[$o-1];
				$data[$o-1]=$ten;
			}
			return $data;
		}
	}
}



 ?>