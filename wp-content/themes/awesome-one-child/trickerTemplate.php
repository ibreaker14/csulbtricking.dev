<?php
/**
 * Template Name: Custom Tricker Page
 *
 * @package WordPress
 * @subpackage Awesome
 * @since Awesome
 */

get_header(); ?>

<div id="main-content" class="main-content" style="background:yellow;">

<?php
	if ( is_front_page() && awesome_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
			?>

			<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
