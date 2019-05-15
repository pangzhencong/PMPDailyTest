<?php 

$arr=[1,2,3,4,5,6];
$len=count($arr);
for ($i=0; $i < $len; $i++) { 
	if($arr[$i]%2==1){
		$res[]=$arr[$i];
	}
}
for ($i=0; $i < $len; $i++) { 
	if ($arr[$i]%2!=1) {
		$res[]=$arr[$i];
	}
}
echo "<pre>";
print_r($res);





 ?>