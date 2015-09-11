<?php
/**
 * Utility Pro.
 *
 * @package      Utility_Pro
 * @link         http://www.carriedils.com/utility-pro
 * @author       Carrie Dils
 * @copyright    Copyright (c) 2015, Carrie Dils
 * @license      GPL-2.0+
 */

add_action( 'wp_enqueue_scripts', 'utility_pro_enqueue_assets' );
/**
 * Enqueue theme assets.
 *
 * @since 1.0.0
 */
function utility_pro_enqueue_assets() {

/ Load mobile responsive menu
	wp_enqueue_script( 'utility-pro-responsive-menu', get_stylesheet_directory_uri() . '/js/responsive-menu.js', array( 'jquery' ), '1.0.0', true );

	$localize = array(
		'buttonText'     => __( 'Menu', 'utility-pro' ),
		'buttonLabel'    => __( 'Primary Navigation Menu', 'utility-pro' ),
		'subButtonText'  => __( 'Menu', 'utility-pro' ),
		'subButtonLabel' => __( 'Sub Navigation Menu', 'utility-pro' ),
	);

	// Localize the responsive menu script (for translation)
	wp_localize_script( 'utility-pro-responsive-menu', 'utilityResponsiveL10n', $localize );

	// Keyboard navigation (dropdown menus) script
	wp_enqueue_script( 'genwpacc-dropdown',  get_stylesheet_directory_uri() . '/js/genwpacc-dropdown.js', array( 'jquery' ), false, true );

}
