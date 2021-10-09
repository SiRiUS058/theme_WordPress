<?php
	/**
	* The template for displaying the footer
	*
	* Contains the closing of the #content div and all content after.
	*
	* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	*
	* @package SiRiUS
	*/

?>


<div style="display: none">
	<?php echo do_shortcode( '[formaQ id="1" type="popup" align="right" ]' ); ?>
</div>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<div class="max">
			<?php
				if ( function_exists('dynamic_sidebar') )
				dynamic_sidebar('sidebar-footer');
			?>

		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->


<div style="display: none;" class="mobile_menu">
	<div class="closeBurger change">
		<div class="bar1"></div>
		<div class="bar2"></div>
		<div class="bar3"></div>
	</div>	
	<?php wp_nav_menu(); ?>
</div>


<?php wp_footer(); ?>
<script src="\wp-content\themes\sirius\js\main.js"></script>
</body>
</html>
