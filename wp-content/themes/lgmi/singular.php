<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<!--<main id="site-content" role="main">-->

	<?php

	/*if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}*/

	?>
<!-- </main>#site-content -->
<section class="inner_banner_sec parallax " style="background-image:url('<?php echo get_template_directory_uri (); ?>/images/slide1.png');">
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
            <div class="col-md-8">
              <?php while(have_posts()):the_post();
                        
                        the_content();
                        
                        endwhile;  wp_reset_query();?>
              
            </div>
			<div class="col-md-4">
			    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); ?>" style="height: auto;
    width: 100%;">
			</div>            
          </div>
		  </div>
		</div>
	</section>

<?php get_footer(); ?>
