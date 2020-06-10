<?php
/**
 * Template Name: Chi siamo
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
            <h1>Chi siamo</h1>
        </div>
    </div>
</div>


    
<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

                <!--Cards-->
                <h2><?php the_field('titolo_cards'); ?></h2>
                <?php if( have_rows('cards') ): ?>
                    <div class="row">
                        <?php while( have_rows('cards') ): the_row(); 

                            // vars
                            $immagine = get_sub_field('immagine');
                            $nome = get_sub_field('nome_cognome');
                            $mansione = get_sub_field('mansione');
                            ?>

                            <div class="col-6 col-md-6">
                                <div class="card area-riservata bg-news-card bordo-md mt-5">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img class="px-3 pt-3" src="<?php echo $immagine['url']; ?>" alt="<?php echo $immagine['alt'] ?>" />
                                    </div>
                                    <div class="card-body text-center">
                                    <h5 style="color: #343a40 !important;" class="card-title"><?php echo $nome; ?></h5>
                                    <h6 class="pb-4"><?php echo $mansione; ?></h6>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>


                <!--Magazine-->
                <div class="pt-8">
                    <h2><?php the_field('titolo_magazine'); ?></h2>
                    <?php the_field('descrizione_magazine'); ?>

                    <!--Start Carousel-->
                    <?php if( have_rows('galleria_magazine') ) { ?>
                    <?php
                        $num = 0;
                        $active = 'active';
                    ?>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-invetval="10000">   
                        <div class="carousel-inner">  
                            <?php $active = 'active'; ?>           
                            <?php while( have_rows('galleria_magazine') ) : the_row() ;         
                                $image = get_sub_field('immagine_magazine');
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
