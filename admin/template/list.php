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
<title></title>
<link rel="stylesheet" href="../css/pintuer.css">
<link rel="stylesheet" href="../css/admin.css">
<script src="../../js/jquery.js"></script>
<script src="../../js/jquery-ui.min.js"></script>
<script src="../../js/template-web.js"></script>
<script type="text/html" id="list">
      {{each items item}}
        <tr>
        <td style="text-align:left; padding-left:20px;">
            <input type="checkbox" name="id[]" value="" />{{item.id}}</td>
        <td width="10%"><img src="../{{item.img}}" alt="" width="70" height="50" /></td>
         <td>{{item.title}}</td>
         <td>{{item.createdate}}</td>
         <td>
             <div class="button-group">
                  <a class="button border-main update" href="edit.php?id={{item.id}}">
                      <span class="icon-edit"></span> 修改</a>
                  <a class="button border-red del" href="javascript:void(0)" onclick="return del({{item.id}},event)">
                       <span class="icon-trash-o"></span> 删除</a>
             </div>
       </tr>
      {{/each}}
</script>
<script type="text/html" id="page">
  {{each pages page}}
      {{if page.first==1}}
        {{if page.end==1}}
          {{if page.page>1}}
              <h>...</h>
          {{/if}}
          <span class="current">{{page.page}}</span>
        {{else}}
          {{if page.page>1}}
              <h>...</h>
          {{/if}}
          <a href="#" class="pageno" style="display: none;">{{page.page}}</a>
          <span class="current">{{page.page}}</span>
        {{/if}}
      {{else if (page.more==1&&page.end==1)}}
        <a href="#" class="pageno">{{page.page}}</a>
        <h>...</h>
      {{else}}
        <a href="#" class="pageno">{{page.page}}</a>
      {{/if}}
  {{/each}}

</script>
</head>
<body>

<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main icon-plus-square-o" href="add.php"> 添加内容</a> </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <thead>
        <tr>
          <th width="100" style="text-align:left; padding-left:20px;">ID</th>
          <th>图片</th>
          <th>标题</th>
          <th width="10%">更新时间</th>
          <th width="310">操作</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
      <tfoot>
        <tr>
          <td colspan="8">
              <div class="pagelist">
                    <a href="#" class='prevpage'>上一页</a>

                    <a href="#" class='nextpage'>下一页</a>
                    <a href="#" class='end'>尾页</a>
              </div>
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
</form>
<script type="text/javascript">
  var tb = $(".on",parent.document).attr("name");
  initpage(1,false,0);
  getpage(1);
  $(".prevpage").click(function(){
    var prev = $(".current").prev().prev();
    if(prev){
      if(prev.attr("class")=='prevpage'){
        if($(this).next().html()=='...'){
          initpage(+$(".current").html()-5,true,0);
        }
      }else if(prev.html()=='...'){
        initpage(+$(".current").html()-5,true,0);
      }else{
        prev.click();
      }
    }
  })
  $(".nextpage").click(function(){
    var next = $(".current").next();
    if(next&&next.html()=='...'){
      console.log($(".current").html());
      initpage(+$(".current").html()+1,false,0);
    }
    if(next&&next.attr("class")!='nextpage'){
      next.click();
    }
  })
  $(".end").click(function(){
    initpage(1,1,1);
  });

  //删除
  function del(id,event){
    event = event ? event : window.event;   
    var obj = event.srcElement ? event.srcElement : event.target; 
  	if(confirm("您确定要删除吗?")){
        $.ajax({
          url:"../delete.php?id="+id+"&tb="+tb,
          success:function(data){
            if(data=="true"){
              $(obj).parent().parent().parent().remove();
            }else{
              alert("服务器正忙，请稍后再试。。。")
            }
          }
        });
  	}
  }

  function getpage(page){
      $.ajax({
        url:"../getlist.php?pagesize=5&page="+page+"&tb="+$(".on",parent.document).attr("name"),
        dataType:"json",
        success:function(data){
          var str = template("list",{items:data});
          $("tbody").html(str);
          var els = $(".update"); 
          for(var i = 0 ;i<els.length;i++){
            els[i].href+="&tb="+tb;
          }
        }
      });
  }
  function initpage(min,flag,getendpage){
      $.ajax({
        url:"../getcount.php?pagesize=5&getendpage="+getendpage+"&min="+min+"&tb="+$(".on",parent.document).attr("name"),
        dataType:"json",
        success:function(data){
          console.log(data)
          $(".pageno").remove();
          $("h").remove();
          $(".current").remove();
          var str = template("page",{pages:data});
          $(".prevpage").after(str);
          bindpageevent();
          if(flag) $(".pageno:eq("+($(".pageno").length-1)+")").click();
        }
      });
  }
  function bindpageevent(){
    if($(".pageno").length == 0){
      getpage($(".current").html());
    }
    $(".pageno").click(function(){
      var cur = $(".pagelist .current");
      cur.prev().css("display","normal");
      cur.remove();
      $(this).after($("<span>").addClass("current").html($(this).html()));
      $(this).css("display","none");
      getpage($(this).html());
    })
  }

</script>
</body>
</html>