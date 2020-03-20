<?php 
/*
Template Name: TV Layout
*/
get_header();
?>
<link rel='stylesheet' id='__EPYT__style-css'  href='http://localhost/lgmi_final/wp-content/plugins/youtube-embed-plus/styles/ytprefs.min.css?ver=13.2.0.1' media='all' />
<style id='__EPYT__style-inline-css'>

                .epyt-gallery-thumb {
                        width: 33.333%;
                }
                
</style>
<link rel='stylesheet' id='epytgb-block-editor-css-css'  href='http://localhost/lgmi_final/wp-content/plugins/youtube-embed-plus/dist/blocks.editor.build.css?ver=13.2.0.1' media='all' />
<link rel='stylesheet' id='__ytprefs_admin__vi_css-css'  href='http://localhost/lgmi_final/wp-content/plugins/youtube-embed-plus/styles/ytvi-admin.min.css?ver=13.2.0.1' media='all' />
<link rel='stylesheet' id='__ytprefs_admin__tinymce_css-css'  href='http://localhost/lgmi_final/wp-content/plugins/youtube-embed-plus/styles/epyt_mce_wizard_button.min.css?ver=13.2.0.1' media='all' />
<link rel='stylesheet' id='embedplusyoutube-css'  href='http://localhost/lgmi_final/wp-content/plugins/youtube-embed-plus/scripts/embedplus_mce.min.css?ver=13.2.0.1' media='all' />


<script src='http://localhost/lgmi_final/wp-admin/load-scripts.php?c=1&amp;load%5Bchunk_0%5D=jquery-core,jquery-migrate,utils,jquery-ui-core,jquery-ui-widget,jquery-ui-mouse,moxiejs,plupload,jquery-ui-draggable,jquery-ui-&amp;load%5Bchunk_1%5D=slider,jquery-touch-punch,iris,wp-color-picker,jquery-effects-core,jquery-effects-fade&amp;ver=5.3.2'></script>
<!--[if lt IE 8]>
<script src='http://localhost/lgmi_final/wp-includes/js/json2.min.js?ver=2015-05-03'></script>
<![endif]-->
<script src='http://localhost/lgmi_final/wp-content/plugins/youtube-embed-plus/scripts/ytprefs.min.js?ver=13.2.0.1'></script>
<script src='http://localhost/lgmi_final/wp-content/plugins/automatic-youtube-gallery/public/assets/js/public.js?ver=1.3.0'></script>
<script src='http://localhost/lgmi_final/wp-content/plugins/automatic-youtube-gallery/admin/assets/js/admin.js?ver=1.3.0'></script>
<script src='http://localhost/lgmi_final/wp-content/plugins/youtube-embed-plus/scripts/ytprefs-admin.min.js?ver=13.2.0.1'></script>
	<link id="wp-admin-canonical" rel="canonical" href="http://localhost/lgmi_final/wp-admin/post.php?post=396&#038;action=edit" />
	
<script src='http://localhost/lgmi_final/wp-content/plugins/automatic-youtube-gallery/block/dist/blocks.build.js?ver=1581332929'></script>
<script src='http://localhost/lgmi_final/wp-content/plugins/youtube-embed-plus/scripts/fitvids.min.js?ver=13.2.0.1'></script>
<script src='http://localhost/lgmi_final/wp-content/plugins/youtube-embed-plus/dist/blocks.build.js?ver=13.2.0.1'></script>
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
              <?php while(have_posts()):the_post();
                        
                        the_content();
                        
                        endwhile;  wp_reset_query();?>
              
                     
          </div>
		</div>
</section>
		
<?php get_footer(); ?>