<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stafford_Squash
 */

?>

<footer id="colophon" class="bg-neutral-800 text-white">
	<div>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'staffordsquash' ) ); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'staffordsquash' ), 'WordPress' );
			?>
		</a>
	</div>
</footer><!-- #colophon -->
