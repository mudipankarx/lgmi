// JavaScript Document

//Home page
var cc = $('#our_couses_slider');
cc.owlCarousel({
	autoplay:false,
    loop:true,
    nav:true,
	dots:true,
	margin:20,
	animationSpeed: 500,
	
	//animateOut: 'fadeOut',
    items: 4,
	navText: [ '<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>' ],
	
	responsive : {
    // breakpoint from 0 up
   0:{
            items:1,
            nav:false
        },
    // breakpoint from 480 up
   480:{
            items:2,
            nav:false,	
        },
    // breakpoint from 768 up
    768:{
            items:3,
            nav:false,
        },
		
		992:{
            items:4,
            nav:false,
			dots:true,
        }
	
}
});

//our_donors_slider
var cc = $('#our_donors_slider');
cc.owlCarousel({
	autoplay:true,
    loop:true,
    nav:true,
	dots:false,
	margin:10,
	animationSpeed: 500,
	
	//animateOut: 'fadeOut',
    items: 4,
	navText: [ '<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>' ],
	
	responsive : {
    // breakpoint from 0 up
   0:{
            items:1,
            nav:false
        },
    // breakpoint from 480 up
   480:{
            items:2,
            nav:false,	
        },
    // breakpoint from 768 up
    768:{
            items:3,
            nav:false,
        },
		
		992:{
            items:5,
            nav:false,
        }
	
}
});
//our_donors_slider
var cc = $('#testimonial_slider');
cc.owlCarousel({
	autoplay:true,
    loop:true,
    nav:true,
	dots:false,
	margin:10,
	animationSpeed: 500,
	
	//animateOut: 'fadeOut',
    items: 1,
	navText: [ '<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>' ],
	
	responsive : {
    // breakpoint from 0 up
   0:{
            items:1,
            nav:false
        },
    // breakpoint from 480 up
   480:{
            items:1,
            nav:false,	
        },
    // breakpoint from 768 up
    768:{
            items:1,
            nav:false,
        },
		
		992:{
            items:1,
            nav:false,
        }
	
}
});

//our_donors_slider
var cc = $('#sponser_logo_slider');
cc.owlCarousel({
	autoplay:true,
    loop:true,
    nav:true,
	dots:false,
	margin:10,
	animationSpeed: 500,
	
	//animateOut: 'fadeOut',
    items: 1,
	navText: [ '<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>' ],
	
	responsive : {
    // breakpoint from 0 up
   0:{
            items:1,
            nav:false
        },
    // breakpoint from 480 up
   480:{
            items:3,
            nav:false,	
        },
    // breakpoint from 768 up
    768:{
            items:5,
            nav:false,
        },
		
		992:{
            items:6,
            nav:false,
        }
	
}
});


var a = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    a = 1;
  }

});