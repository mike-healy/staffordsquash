<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Stafford_Squash
 */

get_header();
?>

	<main id="primary">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span>' . esc_html__( 'Previous:', 'staffordsquash' ) . '</span> <span>%title</span>',
					'next_text' => '<span>' . esc_html__( 'Next:', 'staffordsquash' ) . '</span> <span>%title</span>',
				)
			);

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
