<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jparkkennaby-portfolio_s
 */

?>

<div class="col-xs-12 col-xs-12 col-md-6 col-lg-6" >
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<?php
			if ( has_post_thumbnail() ) : ?>
			<img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive">
		<?php
			endif; ?>

		<header class="entry-header">
			<?php
				if ( is_single() ) {
					the_title( '<h1 class="h5 entry-title">', '</h1>' );
				} else {
					the_title( '<h2 class="h5 entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta p">
				<?php jparkkennaby_portfolio_s_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'jparkkennaby-portfolio_s' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jparkkennaby-portfolio_s' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer p">
			<?php jparkkennaby_portfolio_s_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
</div>

