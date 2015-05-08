<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = 'mtm';

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	require_once(dirname(__FILE__)."/theme-options/header.php");

	require_once(dirname(__FILE__)."/theme-options/home-sections.php");

	require_once(dirname(__FILE__)."/theme-options/artists.php");
	
	require_once(dirname(__FILE__)."/theme-options/artist.php");

	require_once(dirname(__FILE__)."/theme-options/selling.php");

	require_once(dirname(__FILE__)."/theme-options/footer.php");


	//require_once(dirname(__FILE__)."/theme-options/options-example.php");

	return $options;
}