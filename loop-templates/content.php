<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="card area-riservata bg-news-card bordo-md p-3 mb-5">

		<!--Immagine in evidenza-->
		<?php echo get_the_post_thumbnail( $post->ID, 'large w-100' ); ?>

		<header class="entry-header">

			<?php
			the_title(
				sprintf( '<h3 class="card-title pt-5"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h3>'
			);
			?>

			<?php if ( 'post' == get_post_type() ) : ?>

				<div class="entry-meta">
					<?php understrap_posted_on(); ?>
				</div><!-- .entry-meta -->

			<?php endif; ?>

		</header><!-- .entry-header -->

		<div class="entry-content">

			<?php the_excerpt(); ?>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				)
			);
			?>

		</div><!-- .entry-content -->

		<footer class="entry-footer">

			<?php understrap_entry_footer(); ?>

		</footer><!-- .entry-footer -->
		
	</div>

</article><!-- #post-## -->
