<?php
/**
 * This template generates links to social media icons once set in the theme options.  
 *
 * @package blm_basic
 */
?>
<?php $options = get_option( 'blm_basic_theme_options' ); ?>

	<ul class="social-media">
		<?php if ( $options['twitterurl'] != '' ) : ?>
			<li><a href="<?php echo $options['twitterurl']; ?>" class="twitter"><?php _e( 'Twitter', 'blm_basic' ); ?></a></li>
		<?php endif; ?>

		<?php if ( $options['facebookurl'] != '' ) : ?>
			<li><a href="<?php echo $options['facebookurl']; ?>" class="facebook"><?php _e( 'Facebook', 'blm_basic' ); ?></a></li>
		<?php endif; ?>
		
		<?php if ( $options['pinteresturl'] != '' ) : ?>
			<li><a href="<?php echo $options['pinteresturl']; ?>" class="pinterest"><?php _e( 'Pinterest', 'blm_basic' ); ?></a></li>
		<?php endif; ?>
		
		<?php if ( $options['flickrurl'] != '' ) : ?>
			<li><a href="<?php echo $options['flickrurl']; ?>" class="flickr"><?php _e( 'Flickr', 'blm_basic' ); ?></a></li>
		<?php endif; ?>
		
		<?php if ( $options['linkedinurl'] != '' ) : ?>
			<li><a href="<?php echo $options['linkedinurl']; ?>" class="linkedin"><?php _e( 'LinkedIn', 'blm_basic' ); ?></a></li>
		<?php endif; ?>
		
		<?php if ( $options['googleplusurl'] != '' ) : ?>
			<li><a href="<?php echo $options['googleplusurl']; ?>" class="googleplus"><?php _e( 'Google Plus', 'blm_basic' ); ?></a></li>
		<?php endif; ?>
		
		<?php if ( $options['vimeourl'] != '' ) : ?>
			<li><a href="<?php echo $options['vimeourl']; ?>" class="vimeo"><?php _e( 'Vimeo', 'blm_basic' ); ?></a></li>
		<?php endif; ?>

		<?php if ( $options['youtubeurl'] != '' ) : ?>
			<li><a href="<?php echo $options['youtubeurl']; ?>" class="youtube"><?php _e( 'Youtube', 'blm_basic' ); ?></a></li>
		<?php endif; ?>
		
		<?php if ( $options['dribbleurl'] != '' ) : ?>
			<li><a href="<?php echo $options['dribbleurl']; ?>" class="dribble"><?php _e( 'Dribble', 'blm_basic' ); ?></a></li>
		<?php endif; ?>
		
		<?php if ( $options['deliciousurl'] != '' ) : ?>
			<li><a href="<?php echo $options['deliciousurl']; ?>" class="delicious"><?php _e( 'Delicious', 'blm_basic' ); ?></a></li>
		<?php endif; ?>
		
		<?php if ( $options['githuburl'] != '' ) : ?>
			<li><a href="<?php echo $options['githuburl']; ?>" class="github"><?php _e( 'Git Hub', 'blm_basic' ); ?></a></li>
		<?php endif; ?>

		<?php if ( ! $options['hiderss'] ) : ?>
			<li><a href="<?php bloginfo( 'rss2_url' ); ?>" class="rss"><?php _e( 'RSS Feed', 'blm_basic' ); ?></a></li>
		<?php endif; ?>
	</ul><!-- #social-icons-->