<?php 
/*
Template Name: LGMI Radio222
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
<section class="lgmi_radio_page">
		<div class="container">
		
			<div class="row clearfix">
				<div class="col-sm-12">
					<div class="heading_underline_big">
						<h2 class="line-bottom">LGMI RADIO</h2>
					 </div>
				</div>
				<div class="col-md-3">
				  <div class="tab_left_side">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#home">Agriculture projects</a></li>
						<li><a data-toggle="tab" href="#menu1">Building Projects</a></li>
						<li><a data-toggle="tab" href="#menu2">Cultural Matters</a></li>
						<li><a data-toggle="tab" href="#menu3">Good Projections</a></li>
					  </ul>
					</div>
				</div>
				<div class="col-md-9">
				  <div class="tab_right_side">
						<div class="tab-content">
							<div id="home" class="tab-pane fade in active">
							  <div class="mp3_area">
								MP3 space 1..
							  </div>
							</div>
							<div id="menu1" class="tab-pane fade">
							 <div class="mp3_area">
								MP3 space 2..
							  </div>
							</div>
							<div id="menu2" class="tab-pane fade">
							  <div class="mp3_area">
								MP3 space 3..
							  </div>
							</div>
							<div id="menu3" class="tab-pane fade">
							  <div class="mp3_area">
								MP3 space 4..
							  </div>
							</div>
					  </div>
					</div>
				</div>
            
          </div>
		</div>
	</section>
	

<?php get_footer(); ?>