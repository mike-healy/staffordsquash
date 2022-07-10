<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stafford_Squash
 */

get_header();
?>
<div class="main-grid-wrapper">
		<main id="primary" class="col-span-3 bg-green-300 p-8" data-trace="page.php > main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
