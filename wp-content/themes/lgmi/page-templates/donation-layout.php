<?php 
/*
Template Name: Donation Layout
*/
get_header();
?>

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
<!-- content sec -- -->
<section class="content_sec">
		<div class="container">
			<div class="row">
            <div class="col-md-12">
              <?php while(have_posts()):the_post();
                        
                        the_content();
                        
                        endwhile;  wp_reset_query();?>
              
            </div>
            
          </div>
		</div>
	</section>
	

<?php get_footer(); ?>