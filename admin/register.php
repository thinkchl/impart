<?php
	require "util/connectMysql.php";
	$username = $_POST["name"];
	if(array_key_exists("check", $_POST)){
		$sql = "select id from t_user where username='$username'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_fetch_array($result,MYSQLI_ASSOC)){
			echo "false";
		}else{
			echo "true";
		}
		return;
	}
	$password = $_POST["password"];
	$email = $_POST["email"];
	$sql = "insert into t_user values(null,'$username','$password','$email')";
	$result = mysqli_query($conn,$sql);
	if ($result) {
		header("Location:template/login.php");
		return;
	}
	header("Location:template/register.php?error=1");
?>