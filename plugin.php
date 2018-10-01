<?php
/**
 * Plugin Name: The Excerpt Block
 * Plugin URI: https://github.com/ahmadawais/create-guten-block/
 * Description: A block that edits post's excerpt and template for posts with excerpt and paragraph.
 * Author: Milen Petrinski - Gonzo
 * Author URI: https://greatgonzo.net/
 * Version: 0.0.1
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package the-execerpt-block
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
