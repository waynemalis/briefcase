var banScroll=0;
$(document).on("click",".smoothScroll",function(evt){
	if(banScroll===0){
		banScroll=1;
		evt.preventDefault();
		var rinku= $(this).attr('href');
		var rinkuTop = $(rinku).offset().top;
		if(rinku === "#inicio"){
			$("html, body").animate({scrollTop : 0},500,function(){banScroll=0;});
		}else{
			$("html, body").animate({scrollTop : rinkuTop},500,function(){banScroll=0;});
		}
		window.location.href = rinku; 
	}
});