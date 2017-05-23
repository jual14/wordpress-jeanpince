	

jQuery(document).ready(function(){
	var $ = jQuery;
	
	//scroll product on concept-page
	$(".scrollTo").on('click', function(e) {
		e.preventDefault();
		var target = $(this).attr('href');
		$('html, body').animate({
			scrollTop: ($(target).offset().top)
		}, 2000);
	});


/*
     * windowSize
     * call this function to get windowSize any time
     */
    function windowSize() {
      windowHeight = window.innerHeight ? window.innerHeight : $(window).height();
      windowWidth = window.innerWidth ? window.innerWidth : $(window).width();

    }

    //Init Function of init it wherever you like...

    windowSize();
    // For example, get window size on window resize
    $(window).resize(function() {
      windowSize();
      if (windowWidth > 1020) {
        $('.jp-menu').css('display','block');
      }
      else {
      	$('.jp-menu').css('display','none');
      }
    });

	//Hamburger menu
	$('#hamburger-btn').click(function() {
		$(this).toggleClass('hamburger-open');
		$('.jp-menu').slideToggle();
	});

	//parallax
	$('.img-parallax').each(function(){
		var img = $(this);
		var imgParent = $(this).parent();
		function parallaxImg () {
		var speed = img.data('speed');
		var imgY = imgParent.offset().top;
		var winY = $(this).scrollTop();
		var winH = $(this).height();
		var parentH = imgParent.innerHeight();
		// The next pixel to show on screen      
		var winBottom = winY + winH;
		// If block is shown on screen
		if (winBottom > imgY && winY < imgY + parentH) {
		// Number of pixels shown after block appear
		var imgBottom = ((winBottom - imgY) * speed);
		// Max number of pixels until block disappear
		var imgTop = winH + parentH;
		// Porcentage between start showing until disappearing
		var imgPercent = ((imgBottom / imgTop) * 100) + (50 - (speed * 50));
		}
		img.css({
		top: imgPercent + '%',
		transform: 'translate(-50%, -' + imgPercent + '%)'
		});
		}
		$(document).on({
		scroll: function () {
		parallaxImg();
		}, ready: function () {
		parallaxImg();
		}
		});
	});
	// edit button pause player
	var vid = document.getElementById("bgvid");
	var pauseButton = document.querySelector("#polina button");

	if (window.matchMedia('(prefers-reduced-motion)').matches) {
	    vid.removeAttribute("autoplay");
	    vid.pause();
	    pauseButton.innerHTML = '<i class="fa fa-play-circle-o" aria-hidden="true"></i>';
	}

	function vidFade() {
		vid.classList.add("stopfade");
	}
	vid.addEventListener('ended', function()
	{
	// only functional if "loop" is removed 
		vid.pause();
	// to capture IE10
		vidFade();
	}); 
	pauseButton.addEventListener("click", function() {
		vid.classList.toggle("stopfade");
		if (vid.paused) {
			vid.play();
			pauseButton.innerHTML = '<i class="fa fa-pause-circle-o" aria-hidden="true"></i>';
		} else {
			vid.pause();
			pauseButton.innerHTML = '<i class="fa fa-play-circle-o" aria-hidden="true"></i>';
		}
	});
});



