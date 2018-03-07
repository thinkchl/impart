$(function(){
	$("#myCarousel").carousel({
		interval:2000
	}).css("margin-top",$(".navbar").height());
	$(".action-left-father").mouseenter(function(event){
		$(".test").animate({
			right:'+'+$(this).width(),
		},"slow");
	}).mouseleave(function(){
			$(".test").animate({
			right:0, 
		},"slow"); 
	});
	var parm = {
		direction: 'up',
		easing: 'easeInOutBack',
		speed: 'slow',
		interval: 2000,
		height: 'auto',
		visible: 8,
		mousePause: 0,
		controls: {
			up: '.up',
			down: '.down',
			toggle: '.toggle',
		}
	}
	$(window).off("resize").on("resize",function(){
		$(".action-right-top").height($(".action-left-father").height()/2-2);
		$(".action-right-bottom").height($(".action-left-father").height()/2-2);
		$(".action-right-bottom-left img").width($(".action-right-top").width()/2-8);
		$(".action-right-bottom-left img").height($(".action-right-top").height());
		$(".action-right-bottom-right img").width($(".action-right-top").width()/2-8);
		$(".action-right-bottom-right img").height($(".action-right-top").height());
	})
	document.onreadystatechange = function(){
		if(document.readyState == "complete"){
			$(window).resize();
		}
	}

	var dd = $('.vticker').easyTicker(parm).data('easyTicker');
	$('.vticker').mouseenter(function(){
		dd.stop();
	}).mouseleave(function(){
		dd.start();
	});
	// $(window).resize();
	init()
	
	function init(){
		$.ajax({
		  url:"/project/admin/getlist.php",
		  type:"get",
		  data:{
		    pagesize:9,
		    tb:"t_company",
		    page:1
		  },
		  dataType:"json",
		  success:function(data){
		    var str = template("list-company",{items:data});
		    $(".company").append(str);
		    for(var i = 4;i<$(".company > div").length;i++){
		      $(".company > div:eq("+i+")").addClass("hidden-xs");
		    }
		    $(".hoverStyle").mouseover(function(){
				$(this).css("color","red");
				$(this).children("div:eq(0)").children("img").css("border","0.03rem solid pink");
			}).mouseout(function(){
				$(this).css("color","inherit");
				$(this).children("div:eq(0)").children("img").css("border","0.03rem solid #e5e5e5");
			})
		  }
		})
		$.ajax({
			url:"/project/admin/getlist.php",
			type:"get",
			data:{
				pagesize:"all",
				tb:"t_news",
			},
			dataType:"json",
			success:function(data){
				var str = "";
				for(var i =0;i<data.length;i++){
					str+="<li><a href='#'>"+data[i]["title"]+"</a></li>"
				}
				$(".news-list ul").append(str);

			}
		})
	}

})
