<?php
/**
 * Template Name: Uci
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<!-- Hero iniziale -->
<div class="hero-bg">
    <div class="container">
        <div class="py-8">
            <h1>Unione Coltivatori Italiani</h1>
        </div>
    </div>
</div>


    
<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				Lorem ipsum dolor sit amet consectetur adipisicing elit. Et molestiae voluptate rerum alias enim dolorem autem repudiandae, a quisquam ad quo libero eos placeat nulla tempore inventore. Assumenda, dignissimos odit!

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->






<?php get_footer();
