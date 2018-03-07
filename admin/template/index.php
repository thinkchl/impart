<?php
  session_start();
  if(!array_key_exists("user", $_SESSION)){
    header("Location:../template/login.php");
    return;
  }
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="../css/pintuer.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="../../js/jquery.js"></script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="../images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l">
  <a class="button button-little bg-green" href="../../client/home.php" target="_blank"><span class="icon-home"></span> 前台首页</a> 
   &nbsp;&nbsp;<a class="button button-little bg-red" href="../quit.php"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
 
  <h2><span class="icon-pencil-square-o"></span>栏目管理</h2>
  <ul style="display: block">
    <li><a href="list.php?tb=t_news" target="right" name="t_news"><span class="icon-caret-right"></span>街区新闻</a></li>
    <li><a href="list.php?tb=t_company" target="right" name="t_company"><span class="icon-caret-right"></span>入住机构</a></li>
    <li><a href="list.php?tb=t_action" target="right" name="t_action"><span class="icon-caret-right"></span>街区活动</a></li>
    <li><a href="echarts.php" target="right"><span class="icon-caret-right"></span>图标展示</a></li>
  </ul>  
</div>


<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="aa.php" name="right" width="100%" height="100%"></iframe>
</div>
 <script type="text/javascript">
    $(function(){
      $(".leftnav h2").click(function(){
        $(this).next().slideToggle(200);   
        $(this).toggleClass("on"); 
      });
      $(".leftnav ul li a").click(function(){
          $("#a_leader_txt").text($(this).text());
          $(".leftnav ul li a").removeClass("on");
          $(this).addClass("on");
      })
    });
  </script>
</body>
</html>