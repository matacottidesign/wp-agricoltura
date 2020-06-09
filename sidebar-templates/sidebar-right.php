<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
<?php else : ?>
	<div class="col-md-4 widget-area" id="right-sidebar" role="complementary">
		<div class="widget-card social-card p-3 bordo-md d-flex justify-content-between mb-5">
            <a target="_blank" href="https://www.facebook.com/AgricolturaModernaUci"><i class="fab fa-facebook-square"></i></a>
            <a target="_blank" href="https://twitter.com/uciagricoltura"><i class="fab fa-twitter"></i></a>
            <a target="_blank" href="https://www.youtube.com/channel/UCZ9i_TnisBksq97ObmihVAg"><i class="fab fa-youtube"></i></a>
            <a target="_blank" href="https://www.flickr.com/photos/128311321@N04/"><i class="fab fa-flickr"></i></a>
		</div>
<?php endif; ?>
<?php dynamic_sidebar( 'right-sidebar' ); ?>

</div><!-- #right-sidebar -->
