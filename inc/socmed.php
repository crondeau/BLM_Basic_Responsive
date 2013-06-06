<?php
/**
 * This template generates links to social media icons once set in the theme options.  
 *
 * @package blm_basic
 */
?>

	<ul class="social-media">
		<?php if ( get_theme_mod( 'twitter' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'twitter' ); ?>"  class="genericon genericon-twitter" target="_blank"></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'facebook' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'facebook' ); ?>" class="genericon genericon-facebook-alt" target="_blank"></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'pinterest' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'pinterest' ); ?>" class="genericon genericon-pinterest" target="_blank"></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'instagram' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'instagram' ); ?>" class="genericon genericon-instagram" target="_blank"></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'linkedin' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'linkedin' ); ?>" class="genericon genericon-linkedin" target="_blank"></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'googleplus' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'googleplus' ); ?>" class="genericon genericon-googleplus" target="_blank"></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'flickr' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'flickr' ); ?>"  class="genericon genericon-flickr" target="_blank"></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'youtube' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'youtube' ); ?>" class="genericon genericon-youtube" target="_blank"></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'vimeo' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'vimeo' ); ?>" class="genericon genericon-vimeo" target="_blank"></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'dribble' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'dribble' ); ?>" class="genericon genericon-dribbble" target="_blank"></a></li>
		<?php endif; ?>	
		
		<?php if ( get_theme_mod( 'tumblr' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'tumblr' ); ?>" class="genericon genericon-tumblr" target="_blank"></a></li>
		<?php endif; ?>

		<?php if ( get_theme_mod( 'github' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'github' ); ?>" class="genericon genericon-github" target="_blank"></a></li>
		<?php endif; ?>		

	</ul><!-- #social-icons-->