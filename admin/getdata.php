<?php
	require "util/checkLogin.php";
	require "util/connectMysql.php";
	$sql = "select id , username from t_user";
	$result = mysqli_query($conn,$sql);
	$user = array();
	$data = array();
	while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		$user[] = $row["username"];
		$sql = "select sum(t.num) count from (select count(id) num from t_news where uid = '{$row["id"]}' union all select count(id) num from t_company where uid = '{$row["id"]}' union all select count(id) num from t_action where uid = '{$row["id"]}') t;";
		$res = mysqli_query($conn,$sql);
		if($num = mysqli_fetch_array($res,MYSQLI_ASSOC))
			$data[] = $num["count"];
		else
			$data[] = 0;
	}
	$arr = array();
	$arr["user"] = $user;
	$arr["data"] = $data;
	echo json_encode($arr);
?>