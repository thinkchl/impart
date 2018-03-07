<?php
	require "util/connectMysql.php";
	$pagesize = $_GET["pagesize"];
	$tb = $_GET["tb"];
	if($pagesize=='all'){
		$sql = "select * from $tb";
	}else{
		$page = $_GET["page"];
		$sql = "select * from $tb limit " . $pagesize*($page-1) . ",$pagesize";
	}
	$result = mysqli_query($conn,$sql);
	$arr = array();
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$arr[] = $row;
	}
	echo json_encode($arr);
?>