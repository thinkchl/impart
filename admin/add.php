<?php 
	require "util/checkLogin.php";
	require "util/connectMysql.php";
	$title = $_POST["title"];
	$blob = $_POST["content"];
	$tb = $_GET["tb"];
	$filename = $_FILES["img"]["name"];
	$ext = explode(".",$filename)[1];
	$newname = createCode(20) . "." . $ext;
	$savePath = "uploads/$newname";
	$res = move_uploaded_file($_FILES["img"]["tmp_name"], $savePath);
	if(array_key_exists("update", $_GET)){
		$id = $_GET["update"];
		$sql = "update $tb set title='$title',content='$blob',createdate=now(),img='$savePath' where id=$id";
		mysqli_query($conn,$sql);
		header("Location:template/list.php");
		return;
	}
	$sql = "insert into $tb values(null,'$title','$savePath','$blob',now(),'{$_SESSION["userid"]}')";
	$result = mysqli_query($conn,$sql);
	if($result){
		header("Location:template/add.php?success=添加成功！");
		return;
	}
	echo $sql." msg:".mysqli_error($conn);


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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p style="color:red;">添加失败!</p>
	<a href="template/add.php">重新尝试</a>
</body>
</html>