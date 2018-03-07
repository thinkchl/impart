<?php
	require "../admin/util/connectMysql.php";
	$tb = $_GET["tb"];
	$pagesize = $_GET["pagesize"];
	$sql = "select count(id) from $tb";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_NUM);
	echo $row[0];
?>