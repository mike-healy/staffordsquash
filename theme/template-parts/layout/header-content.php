<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stafford_Squash
 */

?>

<header id="masthead" class="bg-neutral-200 dark:bg-neutral-400">
	<div class="flex gap-2">
		<?php
		the_custom_logo();
		
		if ( is_front_page() ) :
			?>
			<h1><?php bloginfo( 'name' ); ?></h1>
			<?php
		else :
			?>
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;
		$stsq_description = get_bloginfo( 'description', 'display' );
		if ( $stsq_description || is_customize_preview() ) :
			?>
			<p><?php echo $stsq_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
	</div>

	<nav id="site-navigation" class="bg-neutral-300">
		<button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'staffordsquash' ); ?></button>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			)
		);
		?>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->

<?php
// Open our main / sidebar wrapper to allow grid.
// each page/single/front etc. template will need to close it after sidebar, before the footer.
?>
<div class="grid grid-cols-4 gap-4 lg:gap-8 border bg-blue-700 dark:bg-blue-800 text-white border-white border-solid" data-trace="parts/layout/header-content">
