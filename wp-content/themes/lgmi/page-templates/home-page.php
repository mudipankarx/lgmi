<?php 
/*
Template Name: Home Page
*/
get_header();
?>

<!-- banner  -->
<!--Banner sec-->
<section class="">
  <div id="banner_carousel" class="carousel slide" data-ride="carousel"> 
    <!-- Indicators --> 
    <!--<ol class="carousel-indicators">
			  	<li data-target="#banner_carousel" data-slide-to="0" class="active"></li>
			    <li data-target="#banner_carousel" data-slide-to="1"></li>
			</ol>--> 
    <!-- Wrapper for slides -->
    
    <div class="carousel-inner">
	<?php 
										$banner=array(
										'post_type' => 'post',
										'post_status' => 'publish',
										'category_name' => 'banner',
										'posts_per_page' => 100,
										);
										$get_banner = new WP_Query( $banner );
										$banner_rec=$get_banner->posts;
										$i=0;
										foreach($banner_rec as $rec){
											
											 $featured_img=wp_get_attachment_url( get_post_thumbnail_id( $rec->ID ), 'thumbnail' );
											$j=$i++;
											if($j==0){
												$class="active";
											}else{
												$class="";
											}
										?>
											  <div class="item <?php echo $class;?>"> <img height="200" src="<?php echo $featured_img;?>" alt="First slide" />
												<div class="container">
												  <div class="banner_text">
													<div class="banner_text_inner">
													  <?php echo $rec->post_content;?>
													  <div class="home_banner_btn_sec wow bounceInRight" data-wow-delay="0.55s"> <a href="<?php echo home_url(); ?>/make-a-donation-now" class="contact_banner_btn" data-animation="animated fadeInRight">Donate Now</a> </div>
													</div>
												  </div>
												</div>
											  </div>
										<?php
										}										
										//exit;
						          ?>
	 <!-- <div class="item"> <img src="<?php //echo get_template_directory_uri (); ?>/images/slide2.png" alt="First slide" />
        <div class="container">
          <div class="banner_text">
            <div class="banner_text_inner">
              <h1  data-wow-delay="0.2s" class="wow bounceInDown">Welcome to <br> Life Gate Ministries International</h1>
              
            </div>
          </div>
        </div>
      </div>-->
    </div>
    
    <!-- Controls --> 
    
    <a class="left carousel-control" href="#banner_carousel" data-slide="prev"> <span class="glyphicon"><img src="<?php echo get_template_directory_uri (); ?>/images/left_arow.png" alt=""/></span> </a> <a class="right carousel-control" href="#banner_carousel" data-slide="next"> <span class="glyphicon"><img src="<?php echo get_template_directory_uri (); ?>/images/right_arow.png" alt=""/></span> </a> 
    
    <!--<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <img src="image/left_arow.png"/><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"> <img src="image/right_arow.png"/></a>--> 
    
  </div>
</section>
<!-- home_box_sec -->
<?php
$block_one=array(
										'post_type' => 'post',
										'post_status' => 'publish',
										'category_name' => 'block-one',
										//'orderby'   => 'meta_value',
                                         'order' => 'ASC',
										'posts_per_page' => 4,
										);
$get_ngo_msg=new WP_Query($block_one);
$ngo_rec=$get_ngo_msg->posts;
$i=0;

?>
<section class="home_box_sec">
  <div class="container">
  <?php
  foreach($ngo_rec as $rec2){	 
  $j=$i++;
	if($j==0){
		$style="background-color: #2dc1e1;";
		$icon="vonunteer_icon.png";
	}else if($j==1){
		$style="background-color: #ceb207;";
		$icon="adopt_child_icon.png";
	}else if($j==2){
		$style="background-color: #4a606b;";
		$icon="get_involved_icon.png";
	}
    else if($j==3){
		$style="background-color: #cc6404;";
		$icon="emergancy_icon.png";
	}
	 // print_r($rec);
  ?>
    <div class="row-- clearfix">
      <div class="col-md-3 col-sm-6 lr_no_padding feature_box_main h_feature1" style="<?php echo $style;?>">
        <div class="feature_box">
          <h3><?php echo $rec2->post_title;?></h3>
          <p style="height:35px;"><?php echo $rec2->post_content;?></p>
          <p><a href="<?php echo site_url();?>/contact" class="lnk_feature">Contact us</a></p>
          <div class="feat_icon"><img src="<?php echo get_template_directory_uri (); ?>/images/<?php echo $icon;?>" alt="" /></div>
        </div>
      </div>
  <?php } 
  ?> 
    </div>
  </div>
</section>
<?php
$bfm=array(
										'post_type' => 'post',
										'post_status' => 'publish',
										'category_name' => 'brighter-future-message',
										//'orderby'   => 'meta_value',
                                         'order' => 'ASC',
										'posts_per_page' => 4,
										);
$get_bfm=new WP_Query($bfm);
$bfm_rec=$get_bfm->posts;

$i=0;

?>
<!-- about_home_sec -->
<section class="about_home_sec">
  <div class="container">
    <div class="row clearfix">
      <div class="col-md-7">
        <div class="about_content">
          <?php
           foreach($bfm_rec as $rec3){
			   $featured_img_bmf1=wp_get_attachment_url( get_post_thumbnail_id( $rec3->ID ), 'full' );
			   $featured_img_extra=$location=get_post_meta($rec3->ID,'featured_image_extra',true);			   
			   ?>
			    <h3><?php echo $rec3->post_title;?></h3>
           <?php echo $rec3->post_content;
		   }?>
		 </div>
      </div>
      <div class="col-md-5">
        <div class="about_img_box">
          <div class="xs-feature-image-box image-1"> <img alt="" src="<?php echo $featured_img_bmf1;?>"> </div>
          <div class="xs-feature-image-box image-2"> <img alt="" src="<?php echo $featured_img_extra['guid'];?>"> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- our_couses_sec -->
<?php
$our_course=array(
										'post_type' => 'our_causes',
										'post_status' => 'publish',										
                                         'order' => 'ASC',
										'posts_per_page' => 1000,
										);
$get_our_course=new WP_Query($our_course);
$our_course_rec=$get_our_course->posts;
//echo "<pre>";print_r($our_course_rec);
$i=0;

?>
<section class="our_couses_sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="heading_box">
          <h5>What we do</h5>
          <h2>OUR CAUSES </h2>
        </div>
      </div>
    </div>
    <div class="couses_slider_area">
      <div class="comman_top">
        <div class="owl-carousel owl-theme" id="our_couses_slider">
		<?php
           foreach($our_course_rec as $rec4){
			   $raised=get_post_meta($rec4->ID,'raised',true);
			   $goal=get_post_meta($rec4->ID,'goal',true);
			   $image=get_post_meta($rec4->ID,'image',true);
			   $image=get_post_meta($rec4->ID,'image',true);
			 
			  

			  $percentage=($raised/$goal)*100;
	    ?>
          <div class="item">
            <div class="causes_box">
              <div class="couses_img_box"> <img class="img img-responsive" src="<?php echo $image['guid'];?>" alt="" style="width: 400px;
    height: 200px;"/>
                <div class="progress_counter">
                  <div class="progressbar" data-animate="false">
                    <div class="circle" data-percent="<?php echo $percentage;?>">
                      <div></div>
                      <!--<p>Testing</p>--> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="couses_txt_box">
                <h4><a href="#"><?php echo $rec4->post_title;?></a></h4>
                <p><?php echo $rec4->post_content;?></p>
                <ul class="list-inline clearfix">
                  <li class="pull-left flip pr-0">Raised: <span class="font-weight-700">$<?php echo $raised;?></span></li>
                  <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$<?php echo $goal;?></span></li>
                </ul>
                <a href="<?php echo home_url(); ?>/make-a-donation-now" class="btn btn_donate_couses btn_theme_colored btn-sm text-uppercase">Donate Now</a> </div>
            </div>
          </div>
		  <?php } ?>
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- counter_sec -->
<?php 
$donator=get_post_meta('328','happy_donators',true);
$success_mission=get_post_meta('328','success_mission',true);
$Impacted=get_post_meta('328','people_impacted',true);
$globalization_work=get_post_meta('328','globalization_work',true);
?>			   
<section class="counter_sec parallax" style="background-image: url('<?php echo get_template_directory_uri (); ?>/images/bg2.jpg');">
  <div class="bg_overlay"></div>
  <div class="container">
    <div class="comman_content_style" id="counter">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="counter_count_box wow fadeInLeft">
            <div class="counter_icon"><i class="pe-7s-smile text-black-light flip"></i></div>
            <div class="counter_txt">
              <div class="counter-value" data-count="<?php echo $donator;?>">
                <h2>0</h2>
              </div>
              <h4>Happy Donators</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="counter_count_box wow fadeInLeft">
            <div class="counter_icon"><i class="pe-7s-rocket flip"></i></div>
            <div class="counter_txt">
              <div class="counter-value" data-count="<?php echo $success_mission;?>">
                <h2>0</h2>
              </div>
              <h4>Success Mission</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="counter_count_box wow fadeInLeft">
            <div class="counter_icon"><i class="pe-7s-add-user flip"></i></div>
            <div class="counter_txt">
              <div class="counter-value" data-count="<?php echo $globalization_work;?>">
                <h2>0</h2>
              </div>
              <h4>People Impacted</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="counter_count_box wow fadeInLeft">
            <div class="counter_icon"><i class="pe-7s-global flip"></i></div>
            <div class="counter_txt">
              <div class="counter-value" data-count="<?php echo $Impacted;?>">
                <h2>0</h2>
              </div>
              <h4>Globalization Work</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- home_upcomming_event -->
<section class="home_upcomming_event">
  <div class="container">
    <div class="row clearfix">
      <div class="col-lg-5 col-md-12">
        <div class="home_upcoming_left">
          <div class="heading_underline">
            <h2 class="line-bottom">Upcoming Events</h2>
          </div>
		  <?php
					$events=array(
					'post_type' => 'upcoming_events',
					'post_status' => 'publish',										
					'order' => 'DESC',
					'posts_per_page' => 3,
					);
					$get_events=new WP_Query($events);
					$events_rec=$get_events->posts;			
					
					foreach($events_rec as $erec){	
						$day=date('D', $erec->post_date); $month=date('M',$erec->post_date);			
						$location=get_post_meta($erec->ID,'location',true);
						$start_date=get_post_meta($erec->ID,'from_date',true);
						$to_date=get_post_meta($erec->ID,'to_date',true);
						$from_time=get_post_meta($erec->ID,'from_time',true);
						$to_time=get_post_meta($erec->ID,'to_time',true);
						//print_r($custome_thumb_img);
						$j=$i++; if($j%2==0)
                ?>
          <div class="upcomming_txt_top">
            <div class="news_date">
              <ul>
                <li class="font-16 border-bottom" style="font-weight:600;"><?php echo $day;?></li>
                <li class="font-12 text-uppercase"><?php echo $month;?></li>
              </ul>
            </div>
            <h3><a href=""><?php echo $erec->post_name;?></a></h3>
            <ul class="list_up_date">
              <li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> at <?php echo $from_time;?> - <?php echo $to_time;?></li>
              <li><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> <?php echo $location;?></li>
            </ul>
            <h4><?php echo $start_date;?> @ <?php echo $from_time;?> - <?php echo $to_time;?></h4>
            <p><?php echo $erec->post_content;?></p>
          </div>
		<?php } ?>
          
        </div>
      </div>
      <div class="col-lg-7 col-md-12">
        <div class="home_upcoming_right">
          <div class="row clearfix">
            <div class="col-sm-12">
              <div class="home_gallery">
                <div class="heading_underline">
                  <h2 class="line-bottom">Photo Gallery</h2>
                </div>
                <div class="gallery_box clearfix">
				<?php
					$gallery=array(
					'post_type' => 'photo_gallery',
					'post_status' => 'publish',
					'posts_per_page' => 1000,
					'posts_per_page' => 12,
					);
					$get_gallery=new WP_Query($gallery);
					$gallery_rec=$get_gallery->posts;
					$main_gallery_id=$gallery_rec[0]->ID;
					$imges_array=get_post_meta($main_gallery_id,'upload_photo',false);					
					$i=0;
					foreach($imges_array as $rec5){
						$j=$i++;
						if($j<=11){
						$featured_img=wp_get_attachment_url( $rec5['ID'] , 'thumbnail' );
						
                ?>
                  <div class="col-lg-3 col-md-4 col-sm-4 galleryImgBox"><a href="<?php echo $featured_img;?>" class="thumbnail"> <img src="<?php echo $featured_img;?>" alt="" style="width:170px; height:90px;"></a> </div>
                <?php  				 
					}
					}?>
                  
					<div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="heading_underline">
                <h2 class="line-bottom">Happy Sponsors</h2>
              </div>
			  <?php
					$our_sponsor=array(
					'post_type' => 'happy_sponsors',
					'post_status' => 'publish',										
					'order' => 'ASC',
					'posts_per_page' => 1000,
					);
					$get_our_sponsor=new WP_Query($our_sponsor);
					$our_sponsor_rec=$get_our_sponsor->posts;
					//echo "<pre>";print_r($our_sponsor_rec);
					$i=0;
					
                ?>
              <div class="sponser_logo_box">
			  
                <div class="owl-carousel owl-theme" id="sponser_logo_slider">
				<?php 
			        foreach($our_sponsor_rec as $rec6){
			        //print_r($rec6);
			        $image=get_post_meta($rec6->ID,'sponsor_logo',true);
					//print_r($image);
					?>
                  <div class="item">
                    <div class="item_sponser_logo"> <img src="<?php echo $image['guid'];?>" alt="" /> </div>
                  </div>
					<?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- home_donate_sec -->
<section class="home_donate_sec parallax" style="background-image:url('<?php echo get_template_directory_uri (); ?>/images/bg2.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-12">	 
	  <?php 
	   $donation_id = get_post(517); 
       echo $donation = $donation_id->post_content;
	   ?>
	  
        <!--<div class="payment_option_box">
          <div class="heading_underline">
            <h2 class="line-bottom">Make a Donation Now!</h2>
          </div>
          <ul class="list-inline">
            <li><a href="paypal" class="btn btn-primary" role="button">Paypal</a></li>
            <li><a href="ipay" class="btn btn-success" role="button">I Pay Total</a></li>
            <li><a href="#" class="btn btn-primary" role="button">Sofort</a></li>
            <li><a href="#" class="btn btn-success" role="button">Payment Wall</a></li>
            <li><a href="#" class="btn btn-primary" role="button">Skrill</a></li>
            <li><a href="https://pay.gocardless.com/AL0002TMN93QSB" class="btn btn-success" role="button">Go Cardless</a></li>
            <li><a href="stripe" class="btn btn-success" role="button">Stripe</a></li>
          </ul>
        </div>-->		
      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="testimonial_area">
          <div class="heading_underline">
            <h2 class="line-bottom">Testimonials</h2>
          </div>
          <div class="owl-carousel owl-theme" id="testimonial_slider">
		   <?php
					$testimonial=array(
					'post_type' => 'testimonials',
					'post_status' => 'publish',										
					'order' => 'ASC',
					'posts_per_page' => 1000,
					);
					$get_testimonial=new WP_Query($testimonial);
					$testimonial_rec=$get_testimonial->posts;					
					$i=0;
					foreach($testimonial_rec as $rec7){
						$customer_name=get_post_meta($rec7->ID,'customer_name',true);
						$costomer_position=get_post_meta($rec7->ID,'costomer_position',true);
						$org_img=get_post_meta($rec7->ID,'customer_img',true);
						//print_r($org_img);
						
                        $custome_thumb_img=wp_get_attachment_url($org_img['ID'], 'thumbnail' );
						//print_r($custome_thumb_img);
                ?>
            <div class="item">
              <div class="testimonial_box">
                <div class="testimonial_txt">
                  <p><?php echo $rec7->post_content;?></p>
                </div>
                <div class="testi_profile">
                  <div class="thumb pull-right"> <img class="img-circle" alt="" src="<?php echo $custome_thumb_img;?>"> </div>
                  <div class="patient-details text-right pull-right mr-20 mt-10">
                    <h5 class="author text-theme-colored"><?php echo $customer_name;?></h5>
                    <h6 class="title"><?php echo $costomer_position;?></h6>
                  </div>
                </div>
              </div>
            </div>
			<?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- latest_news_sec -->
<section class="latest_news_sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="heading_box">
          <h5>What we can do?</h5>
          <h2>LATEST<span class="txt_theme_color">NEWS.</span> </h2>
        </div>
      </div>
    </div>
    <div class="latest_news_inner">
      <div class="comman_top">
        <div class="row clearfix">		
		<?php
					$news=array(
					'post_type' => 'news',
					'post_status' => 'publish',										
					'order' => 'ASC',
					'posts_per_page' => 3,
					);
					$get_news=new WP_Query($news);
					$news_rec=$get_news->posts;					
					$i=0;
					foreach($news_rec as $nerec){	
						$day=date('D', $nerec->post_date); $month=date('M',$nerec->post_date);			
						$thumb_id=get_post_meta($nerec->ID,'_thumbnail_id',true);
                        $custome_thumb_img=wp_get_attachment_url( $thumb_id, 'thumbnail' );
						//print_r($custome_thumb_img);
						$j=$i++; if($j%2==0){
                ?>
          <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft">
            <div class="l_news_box">
              <div class="latest_news_img"> <img class="img img-responsive" src="<?php echo $custome_thumb_img;?>" alt="" /> </div>
              <div class="latest_news_txt">
                <div class="news_txt_top">
                  <div class="news_date">
                    <ul>
                      <li class="font-16 border-bottom" style="font-weight:600;"><?php echo $day;?></li>
                      <li class="font-12 text-uppercase"><?php echo $month;?></li>
                    </ul>
                  </div>
                  <h4><a href=""><?php echo $nerec->post_name;?></a></h4>
                  <h6><span><i class="fa fa-commenting-o" aria-hidden="true"></i></span> 0 Comments</h6>
                </div>
                <p><?php echo $nerec->post_excerpt;?></p>
                <a href="<?php echo $nerec->guid;?>" class="btn-read-more">Read more <span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span></a> </div>
            </div>
          </div>
		<?php }else{?>		  
		   <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft">
            <div class="l_news_box">
              <div class="latest_news_txt">
                <div class="news_txt_top">
                  <div class="news_date">
                    <ul>
                      <li class="font-16 border-bottom" style="font-weight:600;"><?php echo $day;?></li>
                      <li class="font-12 text-uppercase"><?php echo $month;?></li>
                    </ul>
                  </div>
                  <h4><a href=""><?php echo $nerec->post_name;?></a></h4>
                  <h6><span><i class="fa fa-commenting-o" aria-hidden="true"></i></span> 0 Comments</h6>
                </div>
                <p><?php echo $nerec->post_excerpt;?></p>
                <a href="<?php echo $nerec->guid;?>" class="btn-read-more">Read more <span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span></a> </div>
              <div class="latest_news_img"> <img class="img img-responsive" src="<?php echo $custome_thumb_img;?>" alt="" /> </div>
            </div>
          </div>
		 <?php 
		}
		}
		 ?>
		  
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- latest_news_sec -->
<section class="our_donors_sec bg_lighter">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="heading_box">
          <h5>Happy Donate</h5>
          <h2>OUR <span class="txt_theme_color">Donors</span> </h2>
        </div>
      </div>
    </div>
    <div class="couses_slider_area">
      <div class="comman_top">
        <div class="owl-carousel owl-theme" id="our_donors_slider">
		<?php
					$donor=array(
					'post_type' => 'our_donors',
					'post_status' => 'publish',										
					'order' => 'ASC',
					'posts_per_page' => 1000,
					);
					$get_donor=new WP_Query($donor);
					$donor_rec=$get_donor->posts;					
					$i=0;
					foreach($donor_rec as $rec8){
						$amount=get_post_meta($rec8->ID,'donation_amount',true);						
						$thumb_id=get_post_meta($rec8->ID,'_thumbnail_id',true);
                        $custome_thumb_img=wp_get_attachment_url( $thumb_id, 'thumbnail' );
						//print_r($custome_thumb_img);
                ?>
          <div class="item">
            <div class="donors_item_box text-center">
              <div class="donors_img"> <img class="img img-responsive" src="<?php echo $custome_thumb_img;?>" alt="" /> </div>
              <div class="donors_content bg_white">
                <h4><?php echo $rec8->post_title;?></h4>
                <p>Donated: <?php echo $amount;?></p>
              </div>
            </div>
          </div>
		<?php }
		?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>