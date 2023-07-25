<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
$admin_email = get_option( 'admin_email' );
?>
	
	</section>
	
	<footer class="footer">
		<div class="footer-columns">
			<div class="footer-logo">
				<a href="/"><img src="<?php bloginfo( 'template_url' ) ?>/img/logo.svg" class="logo-footer" /></a>
			</div>
			<div class="footer-content">
				<?php 
				
				// the footer content
				the_field( 'footer_content', 'option' ); 

				?>
				<?php
				// check if the nested repeater field has rows of data
				if ( have_rows( 'footer_social', 'option' ) ):
					
					print '<div class="social-icons">';

					// loop through the rows of data
					while ( have_rows( 'footer_social', 'option' ) ) : the_row();

						$name = get_sub_field('name');
						$network = get_sub_field('network');
						$link = get_sub_field('link');

						// get the template path, and get the svg contents from there
						$template_path = get_template_directory();
						$social_icon = file_get_contents( $template_path . '/img/social/' . $network . '.svg' );
						echo '<a href="' . $link . '" target="_blank">' . $social_icon . '</a>';

					endwhile;

					print '</div>';

				endif;
				?>
				<p class="copyright quiet"><?php the_field( 'footer_copyright', 'option' ); ?></p>
			</div>
			<div class="footer-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'nav-menu' ) ); ?>
			</div>
		</div>
		<p class="copyright quiet"><?php the_field( 'footer_copyright', 'option' ); ?></p>
	</footer>

</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>