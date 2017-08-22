var isMobile = {
            Android: function () {
                return navigator.userAgent.match(/Android/i);
            },
            BlackBerry: function () {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function () {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            Opera: function () {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            Windows: function () {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function () {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
            }
        };

        if (isMobile.any()) {

        }
        else {

        window.sr = ScrollReveal();
        sr.reveal('.navbar',{
            delay: 1500,
            duration: 2500
        });
        sr.reveal('#slider',{
            duration: 2500
        });
        sr.reveal('.scrollTop',{
            duration: 2000,
            origin: 'top',
            distance: '200px'
        });
        sr.reveal('.scrollBottom',{
            duration: 2000,
            origin:'bottom',
            distance: '200px'
        });
        sr.reveal('.scrollRight',{
            duration: 2000,
            origin: 'right',
            distance: '300px',
            viewFactor: 0.2
        });
        sr.reveal('.scrollLeft',{
            duration: 2000,
            origin: 'left',
            distance: '300px',
            viewFactor: 0.2
        });
        }

            // ===== Scroll to Top ==== 
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                $('#return-to-top').fadeIn(200);    // Fade in the arrow
            } else {
                $('#return-to-top').fadeOut(200);   // Else fade out the arrow
            }
        });
        $('#return-to-top').click(function() {      // When arrow is clicked
            $('body,html').animate({
                scrollTop : 0                       // Scroll to top of body
            }, 500);
});