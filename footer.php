<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medusa
 */

?>
	</main><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<img class="top-header" src="<?php echo get_template_directory_uri(); ?>/images/top.svg" alt="">
		<nav id="footer-navigation" class="row navbar navbar-toggleable-md " role="navigation">
		 <div class="navbar-brand  col"><a href="#"><?php bloginfo( 'name' ); ?></a></div>

			<?php wp_nav_menu( array(
				'theme_location' 	=> 'secondary_menu',
				'container' 		=> 'ul',
                'menu_class'        => 'col navbar-nav nav justify-content-center',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker(),
			));?>
<p class="copyright col text-right">© That Much 2017</p>
		</nav>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
