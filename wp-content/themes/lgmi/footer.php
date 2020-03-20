<!-- footer -->
<?php 
$primary_email=get_post_meta('328','primary_email',true);
$secondery_email=get_post_meta('328','secondery_email',true);
$primary_phone_number=get_post_meta('328','primary_phone_number',true);
$secondery_phone_number=get_post_meta('328','secondery_phone_number',true);
$location=get_post_meta('328','location',true);
$copyright=get_post_meta('328','copyright',true);


$charity=array(
'post_type' => 'post',
'post_status' => 'publish',
'category_name' => 'charity',
'posts_per_page' => 1,
);
$get_charity = new WP_Query( $charity );
$charity_rec=$get_charity->posts;
$i=0;
?>	

<section class="footer" id="contact">
  <div class="container">
    <div class="row1">
	<?php foreach($charity_rec as $rec_ch){
		  $cimg=wp_get_attachment_url( get_post_thumbnail_id( $rec_ch->ID ), 'thumbnail' );?>
      <div class="col-md-4 footer_box"> <img src="<?php echo $cimg;?>" class="footer_logo_img" alt="" />
        <div class="contact_us">
         <?php echo $rec_ch->post_content;?>
        </div>
      </div>
	<?php } ?> 
      <div class="col-md-2 footer_box form_subscribe">
        <h2 class="footer_heading">Useful Links</h2>
        <div class="ft_links">
          <!--<ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Who we are</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Help Desk</a></li>
            <li><a href="#">Faq</a></li>
          </ul>-->
		   <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?> 
        </div>
      </div>
      <div class="col-md-3 footer_box form_subscribe">
        <h2 class="footer_heading">Terms & Condition</h2>
        <div class="ft_links">
         <!-- <ul>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Terms & Condition LGMI</a></li>
            <li><a href="#">Embracing</a></li>
            <li><a href="#">Modern slavery Statement</a></li>
            <li><a href="#">Copyright Statement</a></li>
            <li><a href="#">Privacy notice</a></li>
          </ul>-->
		   <?php wp_nav_menu( array( 'theme_location' => 'footer2' ) ); ?> 
        </div>
      </div>
      <div class="col-md-3 footer_box">
        <h2 class="footer_heading">Find US</h2>
        <div class="ft_contact">
          <h4><span><i class="fa fa-envelope" aria-hidden="true"></i></span> Mail Us Today</h4>
          <p><a href="mailto: <?php echo $primary_email;?>"><?php echo $primary_email;?></a></p>
          <p><a href="mailto: <?php echo $secondery_email;?>"><?php echo $secondery_email;?></a></p>
          <br>
          <h4><span><i class="fa fa-phone-square" aria-hidden="true"></i></span> +<?php echo $primary_phone_number;?></h4>
          <h4><span><i class="fa fa-phone-square" aria-hidden="true"></i></span> +<?php echo $secondery_phone_number;?></h4>
          <p>Call us for more details!</p>
          <br>
          <h4><span><i class="fa fa-building-o" aria-hidden="true"></i></span> Location</h4>
          <p><?php echo $location;?></p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
<section class="footer_last">
  <div class="container">
    <div class="col-md-12 footer_last_left text-center">
      <p>Copyright ©2020 Life Gate Ministries International. All Rights Reserved</p>
    </div>
  </div>
</section>
<script src="<?php echo get_template_directory_uri (); ?>/js/jquery.js"></script> 
<script src="<?php echo get_template_directory_uri (); ?>/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri (); ?>/js/stellarnav.min.js"></script> 
<script src="<?php echo get_template_directory_uri (); ?>/js/owl.carousel.js"></script> 
<script src="<?php echo get_template_directory_uri (); ?>/js/wow.js"></script> 
<script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.1/dist/circle-progress.js"></script> 
<script src="<?php echo get_template_directory_uri (); ?>/js/theme.js"></script> 
<script src="<?php echo get_template_directory_uri (); ?>/js/jquery.viewbox.js"></script> 
<script type="text/javascript">
		jQuery(document).ready(function($) {
			jQuery('.stellarnav').stellarNav({
				theme: 'light'
			});
		});
	</script> 
<script>
	
console.log("JavaScript is amazing!");
$(document).ready(function($) {
  function animateElements() {
    $('.progressbar').each(function() {
      var elementPos = $(this).offset().top;
      var topOfWindow = $(window).scrollTop();
      var percent = $(this).find('.circle').attr('data-percent');
      var percentage = parseInt(percent, 10) / parseInt(100, 10);
      var animate = $(this).data('animate');
      if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
        $(this).data('animate', true);
        $(this).find('.circle').circleProgress({
          startAngle: -Math.PI / 2,
          value: percent / 100,
          thickness: 14,
          fill: {
            color: '#1B58B8'
          }
        }).on('circle-animation-progress', function(event, progress, stepValue) {
          $(this).find('div').text((stepValue * 100).toFixed(1) + "%");
        }).stop();
      }
    });
  }

  // Show animated elements
  animateElements();
  $(window).scroll(animateElements);
});
	</script> 
<script>
	// For Gallery
		$(function(){
			
			$('.thumbnail').viewbox();
			$('.thumbnail-2').viewbox();

			(function(){
				var vb = $('.popup-link').viewbox();
				$('.popup-open-button').click(function(){
					vb.trigger('viewbox.open');
				});
				$('.close-button').click(function(){
					vb.trigger('viewbox.close');
				});
			})();
			
		});
	</script> 
	<script>
		$(".scrool").click(function() {
		$('html, body').animate({
		scrollTop: $(".home_donate_sec").offset().top
		}, 2000);
		});
	</script>
    <script>
	   wow = new WOW(
	   {
	   animateClass: 'animated',
	   offset:       200
	   }
	   );
	   wow.init();
	   
	
  </script>
  
</body>
</html>