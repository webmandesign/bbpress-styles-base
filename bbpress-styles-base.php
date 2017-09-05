<?php if ( ! defined( 'WPINC' ) ) exit;

/**
 * Plugin Name:        bbPress Styles Base
 * Plugin URI:         https://github.com/webmandesign/bbpress-styles-base
 * Description:        Resets the bbPress forum plugin default styles to bare minimum, allowing styles to be inherited from the theme as much as possible.
 * Version:            1.0.0
 * Author:             WebMan Design - Oliver Juhas
 * Author URI:         https://www.webmandesign.eu
 * License:            GNU General Public License v3
 * License URI:        http://www.gnu.org/licenses/gpl-3.0.txt
 * Requires at least:  4.5
 * Tested up to:       4.8
 * GitHub Plugin URI:  webmandesign/bbpress-styles-base
 *
 * @copyright  WebMan Design, Oliver Juhas
 * @license    GPL-3.0, https://www.gnu.org/licenses/gpl-3.0.html
 *
 * @link  https://github.com/webmandesign/bbpress-styles-base
 * @link  https://www.webmandesign.eu
 *
 * @package  bbPress Styles Base
 */





/**
 * Functionality
 */

	/**
	 * Load custom bbPress styles
	 *
	 * @since    1.0.0
	 * @version  1.0.0
	 */
	function bbpress_styles_base() {

		// Requirements check

			if ( ! class_exists( 'bbPress' ) ) {
				return;
			}

		// Processing

			// Dequeue default bbPress stylesheet

				wp_dequeue_style( 'bbp-default' );

			// Enqueue custom bbPress base stylesheet

				wp_enqueue_style(
					'bbp-default-base',
					trailingslashit( plugin_dir_url( __FILE__ ) ) . 'assets/css/style.css'
				);

			// RTL setup for custom bbPress base stylesheet

				wp_style_add_data( 'bbp-default-base', 'rtl', 'replace' );

	} // /bbpress_styles_base

	add_action( 'wp_enqueue_scripts', 'bbpress_styles_base', 11 );
