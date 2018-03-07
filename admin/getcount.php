<?php
	require "util/connectMysql.php";
	$pagesize = $_GET["pagesize"];
	$tb = $_GET["tb"];
	$min = $_GET["min"];
	$getendpage = $_GET["getendpage"];
	$sql = "select count(id) from $tb";
	$result = mysqli_query($conn,$sql);
	$item = mysqli_fetch_array($result,MYSQLI_NUM);
	$count = $item[0];
	$arrp = array();
	if($getendpage){
		$min = floor($count/$pagesize)-(floor($count/$pagesize)%5-1);
	}
	$curr = 1;
	$flag = 1;
	while($count>0){
		if($curr<$min){
			$curr++;
			$count -= $pagesize;
			continue;
		}
		$arr = array();
		if($flag++<=5){
			if($flag==2)
				$arr["first"] = 1;
			else
				$arr["first"] = 0;
			if($flag==6)
				$arr["end"] = 1;
			else
				$arr["end"] =0;
			$arr["page"] = $min;
			if($count<=$pagesize){
				$arr["end"] = 1;
				$arr["more"] = 0;
			}else{
				$arr["more"] = 1;
			}
			$arrp[] = $arr;
		}
		$count -= $pagesize;
		$curr++;
		$min++;

	}
	echo json_encode($arrp);
?>