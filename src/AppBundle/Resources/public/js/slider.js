
    var curIndex = 0,
        imgDuration = 5000,
        slider = document.getElementById("slides"),
        slides = slider.childNodes;
        imgArray = [
            "../bundles/user/img/slides/slide4.jpg",
            "../bundles/user/img/slides/slide1.jpg",
            "../bundles/user/img/slides/slide2.jpg",
            "../bundles/user/img/slides/slide3.jpg"
            ];
        capArray =[
            'Evénements <hr style="width:50%;margin-left:23%"> <div> Networking,learning and having fun with our special events. </div>',
            'AcaROBOTICS <hr style="width:50%;margin-left:23%"> <div>LEADING THE FUTURE </div>',            
            'Consulting <hr style="width:50%;margin-left:23%"> <div>Save your time, solve your problems with our experts.</div>',
            'Fomations <hr style="width:50%;margin-left:23%"> <div>Improve  your knowledge, improve your life. </div>',
        ];
    function buildSlideShow(imgArray,capArray) {
        for (i = 0; i < capArray.length; i++) {
            var img = document.createElement('img');
            img.src = imgArray[i];
            var cap = document.createElement('p');
            cap.innerHTML = capArray[i];
            slider.appendChild(img);
            slider.appendChild(cap);
        }
    }
    function slideShow() {
        
        function fadeIn(e,f) {
            e.className = "fadeIn";
            f.className = "fadeIn";
        };

        function fadeOut(e,f) {
            e.className = "";
            f.className = "";
        };
            fadeOut(slides[curIndex],slides[curIndex+1]);
            curIndex+=2;
            if (curIndex === slides.length) {
                curIndex = 0;
            }
            
            fadeIn(slides[curIndex],slides[curIndex+1]);

            setTimeout(function () {
                slideShow();
            }, imgDuration);
        };
        buildSlideShow(imgArray,capArray);
    slideShow();
