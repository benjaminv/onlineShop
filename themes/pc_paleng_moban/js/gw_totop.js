$(document).ready(function() {
	var scroll_h=0;
	var scrollstart = $("#main-nav-holder").offset().top;
	var os_0 = $("#os_canshu").offset().top;
	var os_1 = $("#os_jieshao").offset().top;
	var os_2 = $("#os_pinglun").offset().top;
	var os_3 = $("#os_shouhou").offset().top;
	var os_4 = $("#os_changjian").offset().top;
	window.onscroll = function(){
		var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
	if (bodyScrollTop > top11){
		obj11.style.position = (isIE6) ? "absolute" : "fixed";
		obj11.style.top = (isIE6) ? bodyScrollTop + "px" : "0px";
	} else {
		obj11.style.position = "static";

	}
		 var bus_r = $(".right-con").height();//设置内容区右悬浮背景高度
		 os_0 = $("#os_canshu").offset().top||document.getElementById("os_canshu").offsetTop;
		 os_1 = $("#os_jieshao").offset().top||document.getElementById("os_jieshao").offsetTop;
	     os_2 = $("#os_pinglun").offset().top||document.getElementById("os_pinglun").offsetTop;
		 os_3 = $("#os_shouhou").offset().top||document.getElementById("os_shouhou").offsetTop;
		 os_4 = $("#os_changjian").offset().top||document.getElementById("os_changjian").offsetTop;
		 
		 if(!$("#main_widget_3")){scroll_3=os_5;}
		 scroll_h = document.body.scrollTop+document.documentElement.scrollTop;
		 if(scroll_h>os_0-150){$(".abs-ul li").eq(0).addClass("abs-active").siblings().removeClass("abs-active");}
		 if(scroll_h>os_1-150){$(".abs-ul li").eq(1).addClass("abs-active").siblings().removeClass("abs-active");}
		 if(scroll_h>os_2-150){$(".abs-ul li").eq(2).addClass("abs-active").siblings().removeClass("abs-active");}
		 if(scroll_h>os_3-150){$(".abs-ul li").eq(3).addClass("abs-active").siblings().removeClass("abs-active");}
		 if(scroll_h>os_4-150){$(".abs-ul li").eq(4).addClass("abs-active").siblings().removeClass("abs-active");}
	}
	$(".abs-ul li").hover(function(){
		$(this).addClass("abs-hot").siblings().removeClass("abs-hot");
	},function(){
		$(".abs-ul li").removeClass("abs-hot");
	});
	$(".abs-ul li").click(function(){
		var os_index = $(this).index();
		$(this).addClass("abs_active").siblings().removeClass("abs-active");
		if(os_index==0){$('html,body').animate({scrollTop:os_0-40},300);return false;}
		if(os_index==1){$('html,body').animate({scrollTop:os_1-40},300);return false;}
		if(os_index==2){$('html,body').animate({scrollTop:os_2-40},300);return false;}
		if(os_index==3){$('html,body').animate({scrollTop:os_3-40},300);return false;}
		if(os_index==4){$('html,body').animate({scrollTop:os_4-40},300);return false;}
	});
});



var tttt = 0;
    function change_widget(i, obj){
        $("#main-nav boldtit-list").removeClass("h-list");
        $(obj).addClass("h-list").siblings().removeClass("h-list");
        for(j=1; j<=4; j++){
            $("#main_widget_"+j).hide();
        }
		if(i==2){
			$("#main_widget_2").show();
			var top = parseInt($("#wrapper").offset().top) - 40;
			$("html,body").animate({
				scrollTop: top
			},
			500);

			return;
		}
        $("#main_widget_"+i).show();

        //if(i==3) SetiframeHeight('iframe_main');
		if(i==3){
			scroll_3 = $("#main_widget_3").offset().top;
			return;
		}
		scroll_3 = $("#os_online").offset().top;
    }