$(document).ready(function(){

	var navOffset = $("#slider").offset().top;
	$("#mainNav").wrap('<div id="nav-placeholder"></div>');
	$("#nav-placeholder").height($("#mainNav").outerHeight());

	$(window).scroll(function(){
		var scrollPos = $(window).scrollTop();
		if(scrollPos >= 1){
			$("#mainNav").addClass("fixed-top");
		}
		else{
			$("#mainNav").removeClass("fixed-top");
		}
	});
	
});
$(document).ready(function() {
	var showChar = 50;
	var ellipsestext = "...";
	var moretext = "plus";
	var lesstext = "moin";
	$('.more').each(function() {
		var content = $(this).html();

		if(content.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar-1, content.length - showChar);

			var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

			$(this).html(html);
		}

	});

	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(moretext);
		} else {
			$(this).addClass("less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});
});