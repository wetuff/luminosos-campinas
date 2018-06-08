<?php
/**
 * Template used for single posts and other post-types
 * that don't have a specific template.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php get_header(); ?>

<section id="content" <?php Avada()->layout->add_style( 'content_style' ); ?>>
	<?php $post_pagination = get_post_meta( $post->ID, 'pyre_post_pagination', true ); ?>
	<?php if ( ( Avada()->settings->get( 'blog_pn_nav' ) && 'no' !== $post_pagination ) || ( ! Avada()->settings->get( 'blog_pn_nav' ) && 'yes' === $post_pagination ) ) : ?>
		<div class="single-navigation clearfix">
			<div class="fusion-single-navigation-wrapper">
				<?php previous_post_link( '%link', esc_attr__( 'Previous', 'Avada' ) ); ?>
				<?php next_post_link( '%link', esc_attr__( 'Next', 'Avada' ) ); ?>
			</div>
		</div>
	<?php endif; ?>

	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?>>
			<h2 class="entry-title"><?php the_title(); ?></h2>

			<div class="post-content">
				<?php the_content(); ?>
				<?php fusion_link_pages(); ?>
			</div>

			<div style="text-align:right; margin-top:20px;">
				<?php $url = site_url( '/produtos', 'http' );  ?>
				<div class="fusion-button button-flat fusion-button-square button-large button-custom button-1"><a style="color: #ffffff;" href="<?php echo $url; ?>">Ver todos os produtos</a></div>
			</div>

		</article>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
</section>
<?php do_action( 'avada_after_content' ); ?>
<?php
get_footer();

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
