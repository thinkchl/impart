<?php 
	header("Content-Type:text/html;charset=utf-8");
	$conn  = mysqli_connect("127.0.0.1","root","newpass","project");
	if (!$conn) {
		echo "连接数据库失败！原因：".mysqli_connect_error();
	}
	$sql = "set names utf8";
	mysqli_query($conn,$sql);
?>