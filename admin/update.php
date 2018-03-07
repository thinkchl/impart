<?php
echo createCode(20);

// 随机字符串
function createCode($count){
	$code ="";
	for($i=0;$i<$count;$i++){
		$num = mt_rand ( 0 , 61 );
		if($num<10){
			$code .= chr($num+48);
		}else if($num<36){
			$code .= chr(($num-10)+ord('a'));
		}else{
			$code .= chr(($num-36)+ord('A'));
		}
	}
	return $code;
}
?>
