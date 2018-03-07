<?php
	require "util/connectMysql.php";
	session_start();
	$username = $_POST["username"];
	$password = $_POST["password"];
	$sql = "select id,username,password from t_user where username='$username' and password='$password'";
	$result = mysqli_query($conn,$sql);
	$user = mysqli_fetch_array($result,MYSQLI_ASSOC);
	echo $sql;
	if($user){
		$_SESSION["user"] = $username;
		$_SESSION["userid"] = $user["id"];
		// header("Location:template/index.php");
		return;
	}
	// header("Location:template/login.php");
?>