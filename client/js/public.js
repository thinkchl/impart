var pagesize = 5;

$(".navbar").css("min-height",$(".navbar-header").height());
$(".title").css("margin-top",$(".navbar").height());
$("#myCarousel").css("margin-top",$(".navbar").height());
$(".content").css("padding-bottom","0.6rem");
function init(tb,min,end){
	$.ajax({
		url:"/project/admin/getcount.php",
		data:{
			tb:tb,
			min:min,
			getendpage:end,
			pagesize:pagesize
		},
		dataType:"json",
		success:function(data){
			var str = template("pageinit",{pages:data})
			$(".pageno").remove();
			$(".pagination li:eq(0)").after(str);
			if(data[data.length-1].more==0){
				disable($(".next5"));
			}
			if(data.length==1){
				disable($(".next1"));
				disable($(".end"));
			}
			bindpageevent(tb);
			if(end){
				$(".lastpage").click();
			}
			updatePageInfo();
		}
	})
	$.ajax({
		url:"/project/client/getPageInfo.php",
		data:{
			tb:tb,
			pagesize:pagesize
		},
		success:function(data){
			$(".pagination li:eq(0) a").html(data+"条记录"+$(".current").html()+"/"+(Math.ceil(data/pagesize))+"页");
		}
	})
}
function disable(obj){
	obj.addClass("disabled");
	obj.children("a").removeAttr("href");
	obj.unbind("click");
}
function enable(obj,tb){
	obj.removeClass("disabled");
	obj.children("a").attr("href","#");
	bind(tb);
}
function bind(tb){
	$(".next5").not(".disabled").off("click").on("click",function(){
		var nextpage = +$(".lastpage").html()+1;
		init(tb,nextpage,0);
		getpage(nextpage,tb);
	});
	$(".next1").unbind("click").click(function(){
		var cur = $(".current");
		if(cur.html()%5==0){
			$(".next5").click();
			return;
		}
		cur.removeClass("current");
		var next = cur.parent().next().children("a");
		next.addClass("current");
		getpage($(".current").html(),tb);
		updatePageInfo();
		if(next.hasClass("last")){
			disable($(".next1"));
      		disable($(".end"));
		}
	})
	$(".end").not(".disabled").click(function(){
		init(tb,0,1);
	})
}
function getpage(page,tb){
	 $.ajax({
	    url:"/project/admin/getlist.php",
	    data:{
	    	pagesize:5,
	    	page:page,
	    	tb:tb
	    },
	    dataType:"json",
	    success:function(data){
	      var str = template("listinit",{items:data});
	      $(".list-body > div").html(str);
	    }
	 });
}
function bindpageevent(tb){
    $(".pageno").on("click",function(){
      var cur = $(".current");
      cur.removeClass("current");
      $(this).addClass("current");
      if($(this).hasClass("lastpage")&& $(this).hasClass("last")){
      	disable($(".next1"));
      	disable($(".end"));
      }else{
      	enable($(".next1"),tb);
      	enable($(".end"),tb);
      }
      updatePageInfo();
      getpage($(this).html(),tb);
    })
}
function updatePageInfo(){
      var count = parseInt($(".pagination li:eq(0) a").html());
      $(".pagination li:eq(0) a").html(count+"条记录"+$(".current").html()+"/"+(Math.ceil(count/pagesize))+"页");
}