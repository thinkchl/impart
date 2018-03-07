<!DOCTYPE html>
<html lang="zh-CN">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册</title>
<link rel="stylesheet" href="../css/style.css">
<body style="background:url('../images/bg.jpg')no-repeat">

<div class="register-container">
    <h1>欢迎注册</h1>
    <form action="../register.php" method="post" id="registerForm">
        <div>
            <input type="text" name="name" class="username" placeholder="您的用户名" autocomplete="off"/>
        </div>
        <div>
            <input type="password" name="password" class="password" placeholder="输入密码" oncontextmenu="return false" onpaste="return false" />
        </div>
        <div>
            <input type="password" name="confirm_password" class="confirm_password" placeholder="再次输入密码" oncontextmenu="return false" onpaste="return false" />
        </div>
        <div>
            <input type="email" name="email" class="email" placeholder="输入邮箱地址" oncontextmenu="return false" onpaste="return false" />
        </div>

        <button id="submit" type="submit" name="submit">注 册</button>
        <div class="error">
            <span><?php 
                if(array_key_exists("error", $_GET)){
                    echo "注册失败，请填写正确的信息！";
                }
             ?></span>
        </div>
    </form>
    <a href="login.php">
        <button type="button" class="register-tis">已经有账号？</button>
    </a>

</div>

</body>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/comm.js"></script>
<!--表单验证-->
<script src="../../js/jquery.validate.js"></script>
</html>