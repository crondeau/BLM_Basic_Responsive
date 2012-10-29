<?php
/**
 * blm_basic Theme Options
 *
 * @package blm_basic
 */

/**
 * Register the form setting for our blm_basic_options array.
 *
 * This function is attached to the admin_init action hook.
 *
 * This call to register_setting() registers a validation callback, blm_basic_theme_options_validate(),
 * which is used when the option is saved, to ensure that our option values are complete, properly
 * formatted, and safe.
 *
 * We also use this function to add our theme option if it doesn't already exist.
 *
 */


add_action( 'admin_init', 'blm_basic_options_init' );
add_action( 'admin_menu', 'blm_basic_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function blm_basic_options_init(){
	register_setting( 'blm_basic_options', 'blm_basic_theme_options', 'blm_basic_options_validate' );
}

/**
 * Load up the menu page
 */
function blm_basic_options_add_page() {
	add_theme_page( __( 'Theme Options', 'blm_basic' ), __( 'Theme Options', 'blm_basic' ), 'edit_theme_options', 'theme_options', 'blm_basic_options_do_page' );
}

/**
 * Create the options page
 */
function blm_basic_options_do_page() {

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;
	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . wp_get_theme() . __( ' Theme Options', 'blm_basic' ) . "</h2>"; ?>
		<p><?php _e( 'These options will let you setup the social icons at the top of the theme and your link and navigation colours. You can enter the URLs of your profiles to have the icons show up.', 'blm_basic' ); ?></p>
		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'blm_basic' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'blm_basic_options' ); ?>
			<?php $options = get_option( 'blm_basic_theme_options' ); ?>

			<table class="form-table">

				<?php
				/**
				 * RSS Icon
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Hide RSS Icon?', 'blm_basic' ); ?></th>
					<td>
						<input id="blm_basic_theme_options" name="blm_basic_theme_options[hiderss]" type="checkbox" value="1" <?php checked( '1', $options['hiderss'] ); ?> />
						<label class="description" for="blm_basic_theme_options[hiderss]"><?php _e( 'Hide the RSS feed icon?', 'blm_basic' ); ?></label>
					</td>
				</tr>

				<?php
				/**
				 * Facebook Icon
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Enter your Facebook URL', 'blm_basic' ); ?></th>
					<td>
						<input id="blm_basic_theme_options" class="regular-text" type="text" name="blm_basic_theme_options[facebookurl]" value="<?php esc_attr_e( $options['facebookurl'] ); ?>" />
						<label class="description" for="blm_basic_theme_options[facebookurl]"><?php _e( 'Leave blank to hide Facebook Icon', 'blm_basic' ); ?></label>
					</td>
				</tr>
				
				<?php
				/**
				 * Twitter URL
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Enter your Twitter URL', 'blm_basic' ); ?></th>
					<td>
						<input id="blm_basic_theme_options" class="regular-text" type="text" name="blm_basic_theme_options[twitterurl]" value="<?php esc_attr_e( $options['twitterurl'] ); ?>" />
						<label class="description" for="blm_basic_theme_options[twitterurl]"><?php _e( 'Leave blank to hide Twitter Icon', 'blm_basic' ); ?></label>
					</td>
				</tr>
				
				<?php
				/**
				 * You tube
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Enter your Youtube URL', 'blm_basic' ); ?></th>
					<td>
						<input id="blm_basic_theme_options" class="regular-text" type="text" name="blm_basic_theme_options[youtubeurl]" value="<?php esc_attr_e( $options['youtubeurl'] ); ?>" />
						<label class="description" for="blm_basic_theme_options[youtubeurl]"><?php _e( 'Leave blank to hide You Tube Icon', 'blm_basic' ); ?></label>
					</td>
				</tr>
				<?php
				/**
				 * Pinterest
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Enter your Pinterest URL', 'blm_basic' ); ?></th>
					<td>
						<input id="blm_basic_theme_options" class="regular-text" type="text" name="blm_basic_theme_options[pinteresturl]" value="<?php esc_attr_e( $options['pinteresturl'] ); ?>" />
						<label class="description" for="blm_basic_theme_options[pinteresturl]"><?php _e( 'Leave blank to hide Pintrest Icon', 'blm_basic' ); ?></label>
					</td>
				</tr>
				<?php
				/**
				 * LinkedIn
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Enter your LinkedIn URL', 'blm_basic' ); ?></th>
					<td>
						<input id="blm_basic_theme_options" class="regular-text" type="text" name="blm_basic_theme_options[linkedinurl]" value="<?php esc_attr_e( $options['linkedinurl'] ); ?>" />
						<label class="description" for="blm_basic_theme_options[linkedinurl]"><?php _e( 'Leave blank to hide LinkedIn Icon', 'blm_basic' ); ?></label>
					</td>
				</tr>
				<?php
				/**
				 * Google Plus
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Enter your Google Plus URL', 'blm_basic' ); ?></th>
					<td>
						<input id="blm_basic_theme_options" class="regular-text" type="text" name="blm_basic_theme_options[googleplusurl]" value="<?php esc_attr_e( $options['googleplusurl'] ); ?>" />
						<label class="description" for="blm_basic_theme_options[googleplusurl]"><?php _e( 'Leave blank to hide Google + Icon', 'blm_basic' ); ?></label>
					</td>
				</tr>
				
				<?php
				/**
				 * Vimeo
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Enter your Vimeo URL', 'blm_basic' ); ?></th>
					<td>
						<input id="blm_basic_theme_options" class="regular-text" type="text" name="blm_basic_theme_options[vimeourl]" value="<?php esc_attr_e( $options['vimeourl'] ); ?>" />
						<label class="description" for="blm_basic_theme_options[vimeourl]"><?php _e( 'Leave blank to hide Vimeo Icon', 'blm_basic' ); ?></label>
					</td>
				</tr>
				<?php
				/**
				 * Flickr
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Enter your Flickr URL', 'blm_basic' ); ?></th>
					<td>
						<input id="blm_basic_theme_options" class="regular-text" type="text" name="blm_basic_theme_options[flickrurl]" value="<?php esc_attr_e( $options['flickrurl'] ); ?>" />
						<label class="description" for="blm_basic_theme_options[flickrurl]"><?php _e( 'Leave blank to hide Flickr Icon', 'blm_basic' ); ?></label>
					</td>
				</tr>
				<?php
				/**
				 * Dribble
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Enter your Dribble URL', 'blm_basic' ); ?></th>
					<td>
						<input id="blm_basic_theme_options" class="regular-text" type="text" name="blm_basic_theme_options[dribbleurl]" value="<?php esc_attr_e( $options['dribbleurl'] ); ?>" />
						<label class="description" for="blm_basic_theme_options[dribbleurl]"><?php _e( 'Leave blank to hide Dribble Icon', 'blm_basic' ); ?></label>
					</td>
				</tr>
				<?php
				/**
				 * Delicious
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Enter your Delicious URL', 'blm_basic' ); ?></th>
					<td>
						<input id="blm_basic_theme_options" class="regular-text" type="text" name="blm_basic_theme_options[deliciousurl]" value="<?php esc_attr_e( $options['deliciousurl'] ); ?>" />
						<label class="description" for="blm_basic_theme_options[deliciousurl]"><?php _e( 'Leave blank to hide Delicious Icon', 'blm_basic' ); ?></label>
					</td>
				</tr>
				
				<?php
				/**
				 * Github
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Enter your Github URL', 'blm_basic' ); ?></th>
					<td>
						<input id="blm_basic_theme_options" class="regular-text" type="text" name="blm_basic_theme_options[githuburl]" value="<?php esc_attr_e( $options['githuburl'] ); ?>" />
						<label class="description" for="blm_basic_theme_options[githuburl]"><?php _e( 'Leave blank to hide Github Icon', 'blm_basic' ); ?></label>
					</td>
				</tr>	
			
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'blm_basic' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function blm_basic_options_validate( $input ) {

	// Our checkbox value is either 0 or 1
	if ( ! isset( $input['hiderss'] ) )
		$input['hiderss'] = null;
		$input['hiderss'] = ( $input['hiderss'] == 1 ? 1 : 0 );

	// Our text option must be safe text with no HTML tags
	$input['twitterurl'] = wp_filter_nohtml_kses( $input['twitterurl'] );
	$input['facebookurl'] = wp_filter_nohtml_kses( $input['facebookurl'] );
	$input['youtubeurl'] = wp_filter_nohtml_kses( $input['youtubeurl'] );
	$input['vimeourl'] = wp_filter_nohtml_kses( $input['vimeourl'] );	
	$input['pinteresturl'] = wp_filter_nohtml_kses( $input['pinteresturl'] );
	$input['linkedinurl'] = wp_filter_nohtml_kses( $input['linkedinurl'] );
	$input['googleplusurl'] = wp_filter_nohtml_kses( $input['googleplusurl'] );
	$input['flickrurl'] = wp_filter_nohtml_kses( $input['flickrurl'] );
	$input['dribbleurl'] = wp_filter_nohtml_kses( $input['dribbleurl'] );
	$input['deliciousurl'] = wp_filter_nohtml_kses( $input['deliciousurl'] );
	$input['githuburl'] = wp_filter_nohtml_kses( $input['githuburl'] );
	
	// Encode URLs
	$input['twitterurl'] = esc_url_raw( $input['twitterurl'] );
	$input['facebookurl'] = esc_url_raw( $input['facebookurl'] );
	$input['youtubeurl'] = esc_url_raw( $input['youtubeurl'] );
	$input['vimeourl'] = esc_url_raw( $input['vimeourl'] );
	$input['pinteresturl'] = esc_url_raw( $input['pinteresturl'] );
	$input['linkedinurl'] = esc_url_raw( $input['linkedinurl'] );
	$input['googleplusurl'] = esc_url_raw( $input['googleplusurl'] );
	$input['flickrurl'] = esc_url_raw( $input['flickrurl'] );
	$input['dribbleurl'] = esc_url_raw( $input['dribbleurl'] );
	$input['deliciousurl'] = esc_url_raw( $input['deliciousurl'] );
	$input['githuburl'] = esc_url_raw( $input['githuburl'] );
	
	return $input;
}