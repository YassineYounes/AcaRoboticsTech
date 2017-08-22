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
			var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
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
$(function() {
	
		var Page = (function() {

			var $navArrows = $( '#nav-arrows' ),
				$nav = $( '#nav-dots > span' ),
				slitslider = $( '#slider' ).slitslider( {
					onBeforeChange : function( slide, pos ) {

						$nav.removeClass( 'nav-dot-current' );
						$nav.eq( pos ).addClass( 'nav-dot-current' );

					}
				} ),

				init = function() {

					initEvents();
					
				},
				initEvents = function() {

					// add navigation events
					$navArrows.children( ':last' ).on( 'click', function() {

						slitslider.next();
						return false;

					} );

					$navArrows.children( ':first' ).on( 'click', function() {
						
						slitslider.previous();
						return false;

					} );

					$nav.each( function( i ) {
					
						$( this ).on( 'click', function( event ) {
							
							var $dot = $( this );
							
							if( !slitslider.isActive() ) {

								$nav.removeClass( 'nav-dot-current' );
								$dot.addClass( 'nav-dot-current' );
							
							}
							
							slitslider.jump( i + 1 );
							return false;
						
						} );
						
					} );

				};

				return { init : init };

		})();

		Page.init();
	
	});
