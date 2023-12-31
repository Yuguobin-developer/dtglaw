<?php
/**
 * @package testimonial-slider-shortcode
 * @version 1.1.8
 */
/*
Plugin Name: Testimonial Slider Shortcode
Plugin URI: http://wordpress.org/plugins/testimonial-slider-shortcode/
Description: <strong>Testimonial Slider Shortcode</strong> is a lightweight Testimonial Slideshow plugin for WordPress. It lets you create a beautiful responsive Testimonial Slideshow.
Author: Sazzad Hu
Version: 1.1.8
Author URI: http://sazzadh.com/

Prefix: TESTISLIDERSHORT
Prefix: testiSliderShort
*/

$path_dir = trailingslashit(str_replace('\\','/',dirname(__FILE__)));
$path_abs = trailingslashit(str_replace('\\','/',ABSPATH));

define('TESTISLIDERSHORT_URL', site_url(str_replace( $path_abs, '', $path_dir )));
define('TESTISLIDERSHORT_DRI', $path_dir);

add_action('wp_enqueue_scripts', 'testiSliderShort_script_loader');
function testiSliderShort_script_loader(){
	wp_enqueue_style('owl-carousel', TESTISLIDERSHORT_URL.'css/owl.carousel.css');
	wp_enqueue_style('testimonial-slider-shortcode', TESTISLIDERSHORT_URL.'css/testimonial-slider-shortcode.css');
	wp_enqueue_script('owl-carousel', TESTISLIDERSHORT_URL.'js/owl.carousel.min.js' , array('jquery'), '', true);
}


add_shortcode('tss_testimonial_slider', 'testiSliderShort_shortcode');
function testiSliderShort_shortcode( $atts, $content = null ) {
    $settings = shortcode_atts( array(
		'loop' => '1',
		'autoplay' => '1',
		'dots' => '1',
		'nav' => '1',
		'class' => '',
		'align' => 'center',
		'width' => '',
		'padding' => '',
    ), $atts );
	
	$output = '';
	
	ob_start();
	$uid = 'tss_testimonial_slider_'.rand();
	$loop = ( $settings['loop'] == '1' ) ? 'true' :'false';
	$autoplay = ( $settings['autoplay'] == '1' ) ? 'true' :'false';
	$dots = ( $settings['dots'] == '1' ) ? 'true' :'false';
	$nav = ( $settings['nav'] == '1' ) ? 'true' :'false';
	$class = $settings['class'];
	$align = ( $settings['align'] != '' ) ? 'text-align:'.$settings['align'].'; ' :'';
	$width = ( $settings['width'] != '' ) ? 'max-width:'.$settings['width'].'px; ' :'';
	$padding = ( $settings['padding'] != '' ) ? 'padding:'.$settings['padding'].'; ' :'';
	?>
    
    <div class="tss_testimonial_slider dots_<?php echo $dots; ?>" style=" <?php echo $width.$align; ?>">
        <div class="owl-carousel <?php echo $uid; ?>" style=" <?php echo $padding; ?>">
            <?php echo testiSliderShort_content_helper($content, true, true); ?>
        </div>
    </div>
    
    <script type="text/javascript">
		jQuery(document).ready(function($){
			$(".<?php echo $uid; ?>").owlCarousel({
				loop	: <?php echo $loop; ?>,
				dots	: <?php echo $dots; ?>,
				nav	: <?php echo $nav; ?>,
				autoplay: <?php echo $autoplay; ?>,
				margin: 0,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:1
					}
				}
			});
		});
	</script>
    <?php	
	$output .= ob_get_contents();
	ob_end_clean();
	
	return $output;	
}

add_shortcode('tss_item', 'testiSliderShort_item_shortcode');
function testiSliderShort_item_shortcode( $atts, $content = null ) {
    $settings = shortcode_atts( array(
		'text' => '',
		'name' => '',
		'link' => '',
		'target' => '_self', //_blank, _self
    ), $atts );
	
	$link_start = '';
	$link_end = '';
	
	if( $settings['link'] != '' ){ $link_start = '<a href="'.$settings['link'].'" target="'.$settings['target'].'">'; $link_end = '</a>'; }
	
	ob_start();
		echo '<div class="tss_item">';
			echo '<div class="tss_item_in">';
				echo '<p>'.$settings['text'].'</p>';
				echo '<strong>'.$link_start.$settings['name'].$link_end.'</strong>';
			echo '</div>';
		echo '</div>';
	$output = ob_get_contents();
	ob_end_clean();
	
	return $output;	
}


function testiSliderShort_content_helper( $content, $paragraph_tag = false, $br_tag = false ) {
	$content = preg_replace( '#^<\/p>|^<br \/>|<p>$#', '', $content );
	if ( $br_tag ) {
		$content = preg_replace( '#<br \/>#', '', $content );
	}
	if ( $paragraph_tag ) {
		$content = preg_replace( '#<p>|</p>#', '', $content );
	}
	return do_shortcode( shortcode_unautop( trim( $content ) ) );
}