/*
Author       : theme_ocean
Template Name: Monoline - Design Agency HTML Template
Version      : 1.0
*/
(function($) {
	'use strict';
	
	jQuery(document).on('ready', function(){
	
		/*PRELOADER JS*/
		$(window).on('load', function() { 
			$('.status').fadeOut();
			$('.preloader').delay(350).fadeOut('slow'); 
		}); 
		/*END PRELOADER JS*/				
		
		/*Image Popup*/
		 $('.gallery_enlarge_icon').magnificPopup({
			 type:'image',
			 gallery:{
				enabled:true
			  }
			});
		
		/*START Tour Slider JS*/			

		
		/* START MIX JS */
		$('.portfolio-grid').mixItUp({
		
		});		

		/* END MIX JS */
		
		/*START PROGRESS BAR*/
	    $('.progress-bar > span').each(function(){
			var $this = $(this);
			var width = $(this).data('percent');
			$this.css({
				'transition' : 'width 2s'
			});
			
			setTimeout(function() {
				$this.appear(function() {
						$this.css('width', width + '%');
				});
			}, 500);
		});
		/*END PROGRESS BAR*/		
		
		/*START VIDEO JS*/
		$('.video-play').magnificPopup({
            type: 'iframe'
        });
		/*END VIDEO JS*/		
		
		/* START COUNTDOWN JS*/
		$('.counter_feature').on('inview', function(event, visible, visiblePartX, visiblePartY) {
			if (visible) {
				$(this).find('.counter-num').each(function () {
					var $this = $(this);
					$({ Counter: 0 }).animate({ Counter: $this.text() }, {
						duration: 2000,
						easing: 'swing',
						step: function () {
							$this.text(Math.ceil(this.Counter));
						}
					});
				});
				$(this).unbind('inview');
			}
		});
		/* END COUNTDOWN JS */
		
		/*START PARTNER LOGO*/
		$('.partner').owlCarousel({
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
		  items : 5,
		  itemsDesktop : [1199,3],
		  itemsDesktopSmall : [979,3]
		});
		/*END PARTNER LOGO*/	

		/*START VERSE ROTATOR*/
		var verses = [
			{
				text: '"Whatever you do, work at it with all your heart, as working for the Lord."',
				reference: 'Colossians 3:23'
			},
			{
				text: '"Commit to the Lord whatever you do, and He will establish your plans."',
				reference: 'Proverbs 16:3'
			},
			{
				text: '"Let the favor of the Lord our God be upon us; establish the work of our hands."',
				reference: 'Psalm 90:17'
			}
		];
		var verseIndex = 0;
		var $verseBox = $('.verse_content');
		var $verseText = $('#verseText');
		var $verseReference = $('#verseReference');

		if ($verseBox.length && $verseText.length && $verseReference.length) {
			setInterval(function () {
				verseIndex = (verseIndex + 1) % verses.length;
				$verseBox.addClass('is-changing');

				setTimeout(function () {
					$verseText.text(verses[verseIndex].text);
					$verseReference.text(verses[verseIndex].reference);
					$verseBox.removeClass('is-changing');
				}, 600);
			}, 7000);
		}
		/*END VERSE ROTATOR*/
		
	}); 

	/* START PARALLAX JS */
	(function () {

		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		 
		} else {
			$(window).stellar({
				horizontalScrolling: false,
				responsive: true
			});
		}

	}());
	/* END PARALLAX JS  */	

	/*START WOW ANIMATION JS*/
	  new WOW().init();	
	/*END WOW ANIMATION JS*/	
				
})(jQuery);


  
