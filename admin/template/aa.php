<?php
	session_start();
	if(!array_key_exists("user", $_SESSION)){
		echo("<script language='javascript'>window.top.location.href='login.php'</script>");
		return;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	欢迎登录 <?php
		echo $_SESSION["user"];
	?>
</body>
</html>