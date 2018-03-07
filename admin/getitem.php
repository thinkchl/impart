<?php
	require "util/checkLogin.php";
	require "util/connectMysql.php";
	$tb = $_GET["tb"];
	$id = $_GET["id"];
	$sql = "select id,title,content from $tb where id = $id";
	$result = mysqli_query($conn,$sql);
	$item = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>