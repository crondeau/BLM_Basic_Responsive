<?php
/**
 * The template generates your search form
 *
 * @package blm_basic
 */
?>

<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<label for="s" class="screen-reader-text">Search for:</label>
	<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e('Search', 'blm_basic'); ?>" />
	<button type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e('Go', 'blm_basic'); ?>"  />
</form>