<?php
	require "util/checkLogin.php";
	require "util/connectMysql.php";
	$id = $_GET["id"];
	$tb = $_GET["tb"];
	$sql = "delete from $tb where id = '$id'";
	$result = mysqli_query($conn,$sql);
	if($result)
		echo "true";
	else
		echo "false";
?>