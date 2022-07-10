<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Stafford_Squash
 */

get_header();

// Open our main / sidebar wrapper to allow grid.
// each page/single/front etc. template will need to close it after sidebar, before the footer.
?>
<div class="main-grid-wrapper" data-trace="parts/layout/header-content">

	<main id="primary" data-trace="single.php" class="col-span-3 p-8 lg:p-12 border-2 border-blue-300 border-solid">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content/content', get_post_type() );

			the_post_navigation([
				'prev_text' => '<span>' . esc_html__( 'Previous:', 'staffordsquash' ) . '</span> <span>%title</span>',
				'next_text' => '<span>' . esc_html__( 'Next:', 'staffordsquash' ) . '</span> <span>%title</span>',
			]);

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>