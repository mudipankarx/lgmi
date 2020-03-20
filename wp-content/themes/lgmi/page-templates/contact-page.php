<?php 
/*
Template Name: Contact Page
*/
get_header();
$primary_email=get_post_meta('328','primary_email',true);
$secondery_email=get_post_meta('328','secondery_email',true);
$primary_phone_number=get_post_meta('328','primary_phone_number',true);
$secondery_phone_number=get_post_meta('328','secondery_phone_number',true);
$location=get_post_meta('328','location',true);
$maP=get_post_meta('328','map',true);
?>
<style>
.screen-reader-response
{
	display:none;
}
.wpcf7-response-output
{
	display:none;
}
</style>
<section class="inner_banner_sec parallax " style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
  <div class="container">
		<div class="row">
			<div class="col-lg-9 col-sm-12">
				<div class="inner_banner_content">
					<h1><?php the_title() ?></h1>
					<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>-->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contact page sec -->
<div class="contact_page_details_sec">
  <div class="container">
    <div class="row">
      
      <div class="col-md-7">
        <div class="c_form_area">
			<div class="heading_underline">
            <h2 class="line-bottom">Interested in discussing?</h2>
          </div>			
          <?php echo do_shortcode('[contact-form-7 id="375" title="Contact form 1"]');
		  ?>
        </div>
      </div>
		<div class="col-md-5">
        <div class="contact_details_box">
		<br>
		<br>
          <ul class="list_contact_details">
            <li>
              <div class="cl_box">
                <div class="c_icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <h4>Call</h4>
                <p class="text-black-444 "><?php echo $primary_phone_number;?> <br> <?php echo $secondery_phone_number;?><!--<br> (+44) 7956 957 279--></p>
              </div>
            </li>
            <li>
              <div class="cl_box">
                <div class="c_icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <h4>Email</h4>
                <p><?php echo $primary_email;?></p>
              </div>
            </li>
            <li>
              <div class="cl_box">
                <div class="c_icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <h4>Address</h4>
                <p><?php echo $location;?></p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- map area -->
<section class="contact_map_area no_visi">
  <div class="map_box">
  <?php echo $maP;?>
	  </div>
</section>

	

<?php get_footer(); ?>