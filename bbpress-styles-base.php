<?php if ( ! defined( 'WPINC' ) ) exit;

/**
 * Plugin Name:        bbPress Styles Base
 * Plugin URI:         https://github.com/webmandesign/bbpress-styles-base
 * Description:        Reseting the bbPress forum plugin default styles to bare minimum, allowing inheritance of styles from the theme.
 * Version:            0.9.1
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

	function bbpress_styles_base() {

		// Requirements check

			if ( ! class_exists( 'bbPress' ) ) {
				return;
			}

		// Processing

			// Dequeue default bbPress stylesheet

				wp_dequeue_style( 'bbp-default' );

			// Enqueue base stylesheet

				wp_enqueue_style(
					'bbp-default-base',
					trailingslashit( plugin_dir_url( __FILE__ ) ) . 'assets/css/style.css'
				);

	} // /bbpress_styles_base

	add_action( 'wp_enqueue_scripts', 'bbpress_styles_base', 11 );
