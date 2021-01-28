$(".design_lable li .t i").click(function(){
	$(this).parent(".t").toggleClass("hover");
	$(this).parent(".t").next(".txt").slideToggle()
})


var sl=$(".design_lable li").length;
if(sl>6){
	$(".design_lable li").each(function(index){
		if(index>5){
			$(this).hide(0)
		}
	})
	$(".design_lable .more").show()
}else{
	$(".design_lable .more").hide()
}

function opene(){
	$(".design_lable li").each(function(index){
		if(index>5){
			$(this).slideToggle(300);
			$(this).find(".t").removeClass("hover");
			$(this).find(".txt").slideUp();
		}
	})
}

$(".design_lable .more").click(function() {
	opene();
	$(this).toggleClass("hover");
	var text=$(this).find("span").text();
	if(text=="展开"){
		$(this).find("span").text("收起");
	}else if(text=="收起"){
		$(this).find("span").text("展开");
	}
});

if($("div").hasClass("owl-carousel")){
	$('#scroll').owlCarousel({
		items:4,
		autoPlay:false,
		navigation:true,
		navigationText: ["",""],
		scrollPerPage:false
	});
}

$(".details_box ul li .more").hover(function(){
	$(this).next(".txt").fadeIn()
},function(){
	$(this).next(".txt").fadeOut()
});

