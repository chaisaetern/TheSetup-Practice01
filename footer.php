<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TheSetup-Practice01
 */

?>

	<footer id="colophon" class="site-footer">

		<div class="footer-col-1">
			<p>Copyright &copy; 2022 Chai Saetern</p>
			<p>All Rights Reserved.</p>
		</div>
		
		<div class="footer-col-2">
			<h2>Links</h2>
			<?php
				wp_nav_menu(array(
					'menu' => 'Nav Menu',
					'theme_location' => 'footer-menu',
					'menu_class' => 'footer-menu',
					'menu_id' => 'footer-id'
				))
			?>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
