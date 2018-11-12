<?php
/**
 * Plugin Name: The Excerpt Block
 * Plugin URI: https://github.com/gonzomir/the-excerpt-block/
 * Description: The plugin that adds special block for editing post excerpt and block editor template for posts that containd the excerpt block and a paragraph block to encourage authors to write excerpts for their posts.
 * Author: Milen Petrinski - Gonzo
 * Author URI: https://greatgonzo.net/
 * Version: 0.1
 * License: GPL3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
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
