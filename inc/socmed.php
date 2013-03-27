<?php
/**
 * This template generates links to social media icons once set in the theme options.  
 *
 * @package blm_basic
 */
?>

	<ul class="social-media">
		<?php if ( get_theme_mod( 'twitter' ) ) : ?>
			<li><div class="genericon genericon-twitter"></div> 
				<a href="<?php echo get_theme_mod( 'twitter' ); ?>" target="_blank"></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'facebook' ) ) : ?>
			<li><div class="genericon genericon-facebook-alt"></div>
				<a href="<?php echo get_theme_mod( 'facebook' ); ?>" target="_blank"></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'pinterest' ) ) : ?>
			<li><div class="genericon genericon-pinterest"></div>
				<a href="<?php echo get_theme_mod( 'pinterest' ); ?>" target="_blank"></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'linkedin' ) ) : ?>
			<li><div class="genericon genericon-linkedin"></div>
				<a href="<?php echo get_theme_mod( 'linkedin' ); ?>" target="_blank"></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'googleplus' ) ) : ?>
			<li><div class="genericon genericon-googleplus"></div>
				<a href="<?php echo get_theme_mod( 'googleplus' ); ?>" target="_blank"></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'flickr' ) ) : ?>
			<li><div class="genericon genericon-flickr"></div>
				<a href="<?php echo get_theme_mod( 'flickr' ); ?>" target="_blank"></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'youtube' ) ) : ?>
			<li><div class="genericon genericon-youtube"></div>
				<a href="<?php echo get_theme_mod( 'youtube' ); ?>" target="_blank"></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'vimeo' ) ) : ?>
			<li><div class="genericon genericon-vimeo"></div>
				<a href="<?php echo get_theme_mod( 'vimeo' ); ?>" target="_blank"></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'dribble' ) ) : ?>
			<li><div class="genericon genericon-dribbble"></div>
				<a href="<?php echo get_theme_mod( 'dribble' ); ?>" target="_blank"></a></li>
		<?php endif; ?>	
		
		<?php if ( get_theme_mod( 'tumblr' ) ) : ?>
			<li><div class="genericon genericon-tumblr"></div>
				<a href="<?php echo get_theme_mod( 'tumblr' ); ?>" target="_blank"></a></li>
		<?php endif; ?>

		<?php if ( get_theme_mod( 'github' ) ) : ?>
			<li><div class="genericon genericon-github"></div>
				<a href="<?php echo get_theme_mod( 'github' ); ?>" target="_blank"></a></li>
		<?php endif; ?>		

	</ul><!-- #social-icons-->