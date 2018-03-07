<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>中关村创业大街</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">    
	<link rel="stylesheet" href="css/news.css">
	<link rel="stylesheet" href="css/public.css">
	<link rel="stylesheet" href="../css/common.css">
  <script src="../js/template-web.js"></script>
  <script type="text/html" id="listinit">
    {{each items item}}
      <div>
        <h3>{{item.id}}:{{item.title}}</h3>
        <div class="container-fauid row" style="margin:0 auto;">
          <img src="../admin/{{item.img}}" class="img-responsive col-xs-3" alt="" style="padding:0;">
          <div class="col-xs-9" style="padding:0 0.05rem;">
            <p>{{item.content}}</p>
            <p>{{item.createdate}}</p>
          </div>
        </div>
      </div>
    {{/each}}
  </script>
  <script type="text/html" id="pageinit">
   {{each pages page}}
      {{if page.first==1}}
        {{if page.end==0}}
          <li><a href="#" class="pageno current">{{page.page}}</a></li>
        {{else}}
          <li><a href="#" class="pageno current lastpage last">{{page.page}}</a></li>
        {{/if}}
      {{else}}
        {{if page.end==1}}
          {{if page.more==0}}
            <li><a href="#" class="pageno lastpage last">{{page.page}}</a></li>
          {{else}}
            <li><a href="#" class="pageno lastpage">{{page.page}}</a></li>
          {{/if}}
        {{else}}
          <li><a href="#" class="pageno">{{page.page}}</a></li>
        {{/if}}
      {{/if}}
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
            <li><a href="home.php">首页</a></li>  
            <li class="active"><a href="#">街区新闻</a></li>  
            <li><a href="company.php">入驻机构</a></li>  
            <li><a href="action.php">街区活动</a></li>  
            <li><a href="connect.php">联系我们</a></li>  
          </ul>    
        </div>  
      </div>  
    </div>  
    <div class="title">
    	<p>集聚创业服务 孵化科技企业 孕育创业文化</p>
    </div>
    <div class="container-fauid row content">
  		<div class="content-left col-xs-3 ">
  			<div class=" col-md-6 col-xs-offset-1  col-sm-offset-4  col-md-offset-2 col-lg-offset-4">
  				<ul class="nav nav-pills nav-stacked ">
  					<li class="active">
  						<a href="#">街区新闻</a>
              <ul class="nav nav-pills nav-stacked ">
                <li><a href="#" class="small">街区新闻</a></li>
              </ul>
  					</li>
  				</ul>
  			</div>
  		</div>
		  <div class="col-xs-7 col-xs-offset-1 col-md-offset-0 action-list">
          <div class="path">
            <ol class="breadcrumb">
              <li><a href="home.php">首页</a></li>
              <li><a href="#">街区新闻</a></li>
            </ol>
          </div>
          <div class="action-list-body list-body">
            <div>
              
            </div>
            <nav aria-label="Page navigation">
              <ul class="pagination">
                <li><a href="">116条记录1/13页</a></li>
                  
                <li class="next5 next">
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">下5页</span>
                  </a>
                </li>
                <li class="next1 next">
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">下一页</span>
                  </a>
                </li>
                <li class="end next">
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">最后一页</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
      </div>

    </div>
    <div class="footer">
      <p>版权所有：北京海置科创科技服务有限公司</p>
    </div>
    <script src="../js/jquery.min.js"></script>    
    <script src="../js/bootstrap.min.js"></script>  
    <script src="../js/common.js"></script>  
    <script src="js/public.js"></script>
    <script src="js/news.js"></script>
</body>
</html>