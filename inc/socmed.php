<?php
/**
 * This template generates links to social media icons once set in the theme options.  
 *
 * @package blm_basic
 */
?>

	<ul class="social-media">
		<?php if ( get_theme_mod( 'twitter' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'twitter' ); ?>" class="twitter" target="_blank"><?php _e( 'Twitter', 'blm_basic' ); ?></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'facebook' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'facebook' ); ?>" class="facebook" target="_blank"><?php __( 'Facebook', 'blm_basic' ); ?></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'pinterest' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'pinterest' ); ?>" class="pinterest" target="_blank"><?php __( 'Pinterest', 'blm_basic' ); ?></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'linkedin' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'linkedin' ); ?>" class="linkedin" target="_blank"><?php _e( 'LinkedIn', 'blm_basic' ); ?></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'googleplus' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'googleplus' ); ?>" class="googleplus" target="_blank"><?php __( 'Google Plus', 'blm_basic' ); ?></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'flickr' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'flickr' ); ?>" class="flickr" target="_blank"><?php __( 'Flickr', 'blm_basic' ); ?></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'youtube' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'youtube' ); ?>" class="youtube" target="_blank"><?php __( 'YouTube', 'blm_basic' ); ?></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'vimeo' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'vimeo' ); ?>" class="vimeo" target="_blank"><?php __( 'Vimeo', 'blm_basic' ); ?></a></li>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'dribble' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'dribble' ); ?>" class="dribble" target="_blank"><?php __( 'Dribble', 'blm_basic' ); ?></a></li>
		<?php endif; ?>	
		
		<?php if ( get_theme_mod( 'delicious' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'delicious' ); ?>" class="delicious" target="_blank"><?php _e( 'Delicious', 'blm_basic' ); ?></a></li>
		<?php endif; ?>

		<?php if ( get_theme_mod( 'github' ) ) : ?>
			<li><a href="<?php echo get_theme_mod( 'github' ); ?>" class="github" target="_blank"><?php _e( 'Git Hub', 'blm_basic' ); ?></a></li>
			<?php endif; ?>		

	</ul><!-- #social-icons-->