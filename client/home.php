<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>中关村创业大街</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">    
  <link rel="stylesheet" href="css/public.css">
  <link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="../css/common.css">
  <script src="../js/jquery.min.js"></script>    
  <script src="../js/jquery-ui.min.js"></script>
  <script src="../js/template-web.js"></script>
  <script src="../js/jquery.easing.min.js"></script>
  <script src="../js/jquery.easy-ticker.min.js"></script>

  <script type="text/html" id="list-company">
    {{each items item}}
      <div class="col-sm-4 row hoverStyle">
        <div class="col-xs-2 col-sm-4 col-md-3 col-lg-2">
          <img src="../admin/{{item.img}}" class="img-circle" alt="">
        </div>
        <div class="col-xs-10 col-sm-7 col-md-8 col-lg-9 col-sm-offset-1">
          <p>{{item.title}}</p>
          <p>{{item.content}}</p>
        </div>
      </div>
    {{/each}}
  </script>
</head>    
<body>     
    <div class="navbar navbar-fixed-top navbar-default" >    
      <div class="container row">    
        <div class="nav-logo">  
            <a class="" href="#">  
                <img class="col-xs-offset-3" src="../images/logo.png" alt="中关村创业大街" />  
            </a>  
        </div>  
        <div class="navbar-header">    
          <button type="button" class="navbar-toggle nav-btn" data-toggle="collapse" data-target="#navBar">    
            <span class="icon-bar"></span>  
            <span class="icon-bar"></span>  
            <span class="icon-bar"></span>  
          </button>  
        </div>    
        <div class="collapse navbar-collapse navbar-right" id="navBar">    
          <ul class="nav navbar-nav small">  
            <li class="active"><a href="#">首页</a></li>  
            <li><a href="news.php">街区新闻</a></li>  
            <li><a href="company.php">入驻机构</a></li>  
            <li><a href="action.php">街区活动</a></li>  
            <li><a href="connect.php">联系我们</a></li>  
          </ul>    
        </div>  
      </div>  
    </div>    
    <div id="myCarousel" class="carousel slide">
	   <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	      <li data-target="#myCarousel" data-slide-to="3"></li>
	   </ol>  
	   <div class="carousel-inner">
	      <div class="item active">
	         <img src="../images/banner_10.jpg" alt="First slide">
	      </div>
	      <div class="item">
	         <img src="../images/banner_12.jpg" alt="Second slide">
	      </div>
	      <div class="item">
	         <img src="../images/banner_n_07.jpg" alt="Third slide">
	      </div>
	      <div class="item">
	         <img src="../images/banner_n_07s.jpg" alt="four slide">
	      </div>
	   </div>
	</div>
	<div class="container-fauid content row">
    <div class="news">
    		<div class="home-title">
    			<span>街区新闻</span>
    		</div>
        <div class="row">
          <div class="news-img col-sm-6">
            <img class="img-responsive" src="../images/bng5.jpg" alt="">
          </div>
          <div class="news-content col-sm-6">
            <div class="test">
            <span>［大街访谈］对话Founders Space创始人...</span>
            <p>3月15日，由北京大学创业训练营、中信前沿经济与中关村创业大街联合主办的“创业思奔硅谷顶级孵化器Founde...”</p>
            </div>
            <div class="news-list vticker">
              <ul>
              
              </ul>
            </div>
          </div>
        </div>
    </div>
    <div class=" company row">
      <div class="home-title">
        <span>入驻机构</span>
      </div>
    </div>
    <div class="action">
      <div class="home-title">
        <span>街区活动</span>
      </div>
      <div class="row">
        <div class="col-sm-6 action-left">
          <div class="action-left-father">
            <div class="ttt"><p>大街印象 梦想同行</p></div>
            <div class="test">
              <img src="../images/bng1.png" class="img-responsive" alt="">
            </div>
          </div>
        </div>
        <div class="col-sm-6 action-right">
          <div class="action-right-top"></div>
          <div class="action-right-bottom row">
            <div class="action-right-bottom-left col-xs-6">
              <img src="../images/bng3.png" class="img-responsive" alt="">
            </div>
            <div class="action-right-bottom-right col-xs-6">
              <img src="../images/bng4.png" class="img-responsive" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
  <div class="footer">
    <p>版权所有：北京海置科创科技服务有限公司</p>
  </div>
    <script src="../js/bootstrap.min.js"></script>  
    <script src="../js/common.js"></script>  
    <script src="js/public.js"></script>
    <script src="js/home.js"></script>
</body>  
</html>