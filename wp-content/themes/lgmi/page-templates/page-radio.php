<?php
/**
 * Template Name: Radio Template
 *
 */


get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
 <?php
					$our_sponsor=array(
					'post_type' => 'lgmi_radio',
					'post_status' => 'publish',										
					'order' => 'DESC',
					'posts_per_page' => 1000,
					);
					$get_our_sponsor=new WP_Query($our_sponsor);
					$our_sponsor_rec=$get_our_sponsor->posts;?>
 <!-- Section: inner-header -->
 <section class="inner_banner_sec parallax " style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white"><?php echo the_title();?></h3>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section class="bg-silver-light">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 innercontent">
              <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom"><?php echo the_title();?></h2>
              
              <div  class="col-sm-12 radiotab">
     
        <div class="col-md-3 col-lg-3"> <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left sideways">
          <?php 
          $i=1;
          foreach($our_sponsor_rec as $wcatTerm) : 
		   //echo $i;
		  //echo "<pre>";print_r($file);
		  //die;
            if($i==1)
            {
              $activeclass="active";
            }
            else
            {
              $activeclass="";
            }
          ?>
            <li class="<?php echo $activeclass; ?>" id="<?php echo $i;?>" onclick="show('<?php echo $wcatTerm->ID;?>');"><a href="#<?php echo $wcatTerm->slug; ?>" data-toggle="tab"><?php echo $wcatTerm->post_title; ?></a></li>
            <?php 
            $i++; endforeach; 
            ?>
          </ul>
        </div>

						
        <div class="col-md-9 col-lg-9">
		<?php 
				 $b=1;	
						foreach($our_sponsor_rec as $wcatTerm) { 
						$file=get_post_meta($wcatTerm->ID,'upload_mp3_audio',false);
						$c=$b++;
		                 
						//echo $wcatTerm->ID;
						?>
          <!-- Tab panes -->
          <div class="tab-content dis" id="t_<?php echo $wcatTerm->ID;?>" <?php if($c!=1){?>style="display:none;"<?php } ?>>
       <div class="wonderpluginaudio" id="wonderpluginaudio-1"  data-audioplayerid="1" data-width="100%" data-height="600" data-skin="barwithplaylist" data-progressinbar="true" data-showinfo="false" data-showimage="false" data-autoplay="true" data-random="false" data-forceflash="true" data-forcehtml5="true" data-autoresize="true" data-responsive="false" data-showtracklist="true" data-tracklistscroll="true" data-showprogress="true" data-showprevnext="true" data-showloop="true" data-preloadaudio="true" data-showtracklistsearch="false" data-saveposincookie="false" data-showtime="true" data-showvolume="true" data-showvolumebar="true" data-showliveplayedlist="false" data-showtitleinbar="false" data-showloading="false" data-enablega="false" data-titleinbarscroll="true" data-donotinit="false" data-addinitscript="false" data-imagewidth="100" data-imageheight="100" data-loop="1" data-tracklistitem="100" data-titleinbarwidth="80" data-gatrackingid="" data-playbackrate="1" data-playpauseimage="playpause-24-24-0.png" data-playpauseimagewidth="24" data-playpauseimageheight="24" data-cookiehours="240" data-prevnextimage="prevnext-24-24-0.png" data-prevnextimagewidth="24" data-prevnextimageheight="24" data-volumeimage="volume-24-24-0.png" data-volumeimagewidth="24" data-volumeimageheight="24" data-liveupdateinterval="10000" data-maxplayedlist="8" data-playedlisttitle="Last Tracks Played" data-loopimage="loop-24-24-0.png" data-loopimagewidth="24" data-loopimageheight="24" data-infoformat="By %ARTIST% %ALBUM%&lt;br /&gt;%INFO%" data-tracklistscroll="false" data-jsfolder="http://localhost/lgmi_final/wp-content/plugins/wonderplugin-audio-trial/engine/" style="display:block;position:relative;margin:0 auto;width:100%;max-width:100%px;height:auto;">
					
					
					<ul class="amazingaudioplayer-audios" style="display:none;">
					
						<?php 
						$i=1;
						foreach($file as $f){
						if(isset($f['guid'])&&$f['guid']!=''){
						?>
						<li data-artist="" data-title="<?php echo $f['post_title'];?>" data-album="" data-info="&quot;Best Agriculture projects&quot;." data-image="http://lgmi.winsomeitsolutions.com/wp-includes/images/media/audio.png" data-duration="114">
						<div class="amazingaudioplayer-source" data-src="<?php echo $f['guid'];?>" data-type="audio/mpeg" ></div>
						</li>
						
					   <?php }
						}?>
					
					
					</ul><div class="wonderplugin-engine"><a href="http://www.wonderplugin.com/wordpress-audio-player/" title="WordPress HTML5 Audio Player">WordPress HTML5 Audio Player</a></div>

            <!-- <div class="tab-pane active" id="home-v">Home Tab.</div>
            <div class="tab-pane" id="profile-v">Profile Tab.</div>
            <div class="tab-pane" id="messages-v">Messages Tab.</div>
            <div class="tab-pane" id="settings-v">Settings Tab.</div> -->
          </div>
        </div>
        <?php } ?>
        <div class="clearfix"></div>

      </div>

    
    </section> 

  
  <script>
  function show(id)
  {
	  $('.dis').hide();
	  $('#t_'+id).show();
  }
  </script>
  	
<?php endwhile;?>
<?php get_footer(); ?>

<script>

</script>

<script type='text/javascript' src='<?php echo get_site_url(); ?>/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='<?php echo get_site_url(); ?>/wp-content/plugins/wonderplugin-audio-trial/engine/wonderpluginaudio.js'></script>
<script type='text/javascript' src='<?php echo get_site_url(); ?>/wp-content/themes/lgmi/js/skip-link-focus-fix.js'></script>