$( document ).ready(function() {

	$('.menu-toggle').click(function(){
		$(this).toggleClass('active');
		$(this).toggleClass('inactive');
		$('.nav').toggleClass('active');
		$('.nav').toggleClass('inactive');
	});

	$('.scroller').slick({
        arrows: true,
        autoplay: true,
        infinite: true,
        slidesToShow: 1,
  		slidesToScroll: 1,
  		cssEase: "ease",
  		autoplaySpeed: 5000,
  		pauseOnFocus: false,
  		variableWidth: true,
  		offset: 800,
  		duration: 1200,
  		responsive: [
		    {
		      breakpoint: 900,
		      settings: {
		      	arrows: false,
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
    });

    //$('.hero-slider').addClass('reveal');


    /*$('.hero-slider').slick({
        arrows: false,
        autoplay: true,
        infinite: true,
        slidesToShow: 1,
  		slidesToScroll: 1,
  		cssEase: "ease",
  		autoplaySpeed: 2000,
  		pauseOnFocus: false,
  		variableWidth: true,
  		duration: 2000,
  		responsive: [
		    {
		      breakpoint: 900,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
    });*/

    
	AOS.init({
		duration: 1000,
		easing: 'ease-out'
	});

	/*function activateButton() {
		$('.cta-wrapper .gray').toggleClass('active');
	}

	var interval = setInterval(activateButton, 3000);*/

	$('.career-listings .list >div').click(function(e){
		var indexno;
		$('.career-listings .list >div').removeClass('active');
		$('.career-listings .descriptions >div').hide();

		//console.dir($(e.target)['context'].localName);

		if($(e.target)['context'].localName == 'strong') {
			indexno = $(e.target).parent('div').index() + 1;
		} else {
			indexno = $(e.target).index() + 1;
		}

		var active = indexno - 1; 

		$('.career-listings .list >div').eq(active).addClass('active');

		$('.career-listings .descriptions >div').eq(indexno).slideDown();

	});



});