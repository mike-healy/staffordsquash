<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stafford_Squash
 */

?>

<footer id="colophon" class="bg-blue-900 text-blue-200 p-4 lg:py-8 lg:px-12">
	<div>
		&copy; <?php echo date('Y') . ' ' . get_bloginfo('site_name'); ?> 
		<?php
		if (is_front_page()) { ?>
			<a href="https://www.mikehealy.com.au" target="_blank" rel="noopener">website by Mike Healy</a>
		<?php } ?>
	</div>
</footer><!-- #colophon -->
