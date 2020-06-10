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

                <div class="embed-container">
                    <?php the_field('video1'); ?>
                </div>

                <div class="pt-5">
                    <?php the_field('intro'); ?>
                </div>

                <div class="pt-8">
                    <h2><?php the_field('titolo'); ?></h2>

                    <!--Start Carousel-->
                    <?php if( have_rows('galleria') ) { ?>
                    <?php
                        $num = 0;
                        $active = 'active';
                    ?>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">   
                        <div class="carousel-inner">  
                            <?php $active = 'active'; ?>           
                            <?php while( have_rows('galleria') ) : the_row() ;         
                                $image 		= get_sub_field('immagini_uci');
                            ?>           
                            <div class="carousel-item <?php echo $active; ?>">
                                <img class="d-block w-100" src="<?php echo $image['url'];  ?>" alt="<?php echo $image['alt'];  ?>">
                            </div>                           
                            <?php $active = ''; ?>                         
                            <?php endwhile; ?>                     
                        </div>
                
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>               
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>                 
                    </div>               
                    <?php  } ?>
                    <!--End Carousel-->

                    <div class="pt-5">
                        <?php the_field('descrizione'); ?>
                    </div>

                    <div class="embed-container">
                        <?php the_field('video2'); ?>
                    </div>  

                </div>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->






<?php get_footer();
