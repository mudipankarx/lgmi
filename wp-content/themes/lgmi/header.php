<?php
$site_logo=get_post_meta('328','site_logo',true);
$img_id=$site_logo['ID'];
$logo=wp_get_attachment_url($img_id , 'thumbnail' );

$facebook_link=get_post_meta('328','facebook_link',true);
$twiter_link=get_post_meta('328','twiter_link',true);
$google_plus=get_post_meta('328','google_plus',true);
$pinterest_link=get_post_meta('328','pinterest_link',true);
$linkdin=get_post_meta('328','linkdin',true);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Life Gate Minister &#8211; Charity Website</title>
<link href="<?php echo get_template_directory_uri (); ?>/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="<?php echo get_template_directory_uri (); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="<?php echo get_template_directory_uri (); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri (); ?>//bootstrap-submenu.min.css" rel="stylesheet" >
<link href="<?php echo get_template_directory_uri (); ?>/css/stellarnav.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/owl.theme.default.min.css">
<link href="<?php echo get_template_directory_uri (); ?>/css/viewbox.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri (); ?>/css/animate.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri (); ?>/css/pe-icon-7-stroke.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/me.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri (); ?>/css/theme.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri (); ?>/css/responsive.css" rel="stylesheet">
</head>

<body>
<!--<section class="top_header">
	<div class="container">
		<a href="index.html"><img src="images/logo.png" /></a>
	</div>
</section>-->
<section class="header_one">
  <div class="container">
    <div class="row clearfix">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="header_top_left header_one_right">
          <ul class="top_head_menu">
            <li><a href="<?php echo home_url(); ?>/faq">FAQ</a></li>
            <li><a href="<?php echo home_url(); ?>/help-desk">Help Desk</a></li>
            <li><a href="<?php echo home_url(); ?>/support">Support</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="header_top_right">
          <ul class="list_top_social">
            <li><a href="<?php if(isset($facebook_link)){ echo $facebook_link; }?>"><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?php if(isset($twiter_link)){ echo $twiter_link;}?>"><i class="fa fa-twitter"></i></a></li>
            <li><a href="<?php if(isset($google_plus)){ echo $google_plus;}?>"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="<?php if(isset($pinterest_link)){ echo $pinterest_link;}?>"><i class="fa fa-instagram"></i></a></li>
            <li><a href="<?php if(isset($linkdin)){ echo $linkdin;}?>"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="logo_sec">
  <div class="container">
    <div class="row clearfix">
      <div class="col-sm-12">
        <div class="logo_box"> <a href="<?php echo home_url(); ?>" class="header_logo"><img src="<?php echo $logo;?>" alt="" /></a> </div>
      </div>
    </div>
  </div>
</section>

<!-- Navigation Sec-->
<nav class="navbar navbar-default main_navbar">
  <div class="container">
    <div class="nav_container_inner"> 
      
      <!--<div class="navbar-header header_right">
        <a href="index" class="navbar-brand wow pulse">jjjj</a> 
		 </div>-->
      <div class="navbar-header header_right">
        <ul class="list_donate">
          <li><a class="scrool" href="<?php echo home_url(); ?>/make-a-donation-now">Donate Now</a></li>
          <li><a href="<?php echo site_url();?>/contact">Join Us</a></li>
        </ul>
      </div>
      <div id="main-nav" class="nav_header_left stellarnav">
        <!--<ul class="nav navbar-nav">
          <li class="active"><a href="index.html">Home</a></li>
			<li class="drop-right"><a href="">About Us</a>
            <ul>
              <li><a href="#">Our Impact and success</a>
                <ul>
                  <li><a href="#">Item</a></li>
                  <li><a href="#">Item</a></li>
                  <li><a href="#">Item</a></li>
                  <li><a href="#">Item</a></li>
                </ul>
              </li>
              <li><a href="#">Church Constitution</a></li>
              <li><a href="#">Statement of beliefs</a></li>
              <li><a href="#">Membership</a></li>
              <li><a href="#">Church discipline</a></li>
              <li><a href="#">Department</a></li>
              <li><a href="#">Trustees Constitution</a></li>
              <li><a href="#">Child protection</a></li>
            </ul>
          </li>
          <li class="drop-right"><a href="">Who We Are</a>
            <ul>
              <li><a href="#">Evangelism ideas for community events</a>
                <ul>
                  <li><a href="#">Item</a></li>
                  <li><a href="#">Item</a></li>
                  <li><a href="#">Item</a></li>
                  <li><a href="#">Item</a></li>
                </ul>
              </li>
              <li><a href="#">Join our Mission</a></li>
              <li><a href="#">Mission Presentation</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
            </ul>
          </li>
          <li><a href="#">Lgmi TV</a></li>
          <li><a href="#">Lgmi Radio</a></li>
          <li><a href="#">Projects</a></li>
          <li><a href="#">Contact</a></li>
          <li class="drop-left"><a href="contact.html">More</a>
            <ul>
              <li><a href="#">How deep?</a>
                <ul>
                  <li><a href="#">Item</a></li>
                  <li><a href="#">Item</a></li>
                  <li><a href="#">Item</a></li>
                  <li><a href="#">Item</a></li>
                </ul>
              </li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
            </ul>
          </li>
        </ul>-->
		<?php
            $defaults = array(
                'theme_location'  => '',
                'menu'            => '',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'nav navbar-nav',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 7,
                'walker'          => ''
                );
            wp_nav_menu( $defaults );
            ?>
        <div class="clearfix"></div>
      </div>
      <!-- .stellar-nav --> 
      
    </div>
  </div>
</nav>
