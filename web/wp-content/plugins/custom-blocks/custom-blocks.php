<?php
/**
 * Custom Blocks
 *
 * @package     Pantheon\RefArch
 * @author      Pantheon Professional Servies Application Performance Team
 * @license     Proprietary
 *
 * @wordpress-plugin
 * Plugin Name: Custom Blocks
 * Plugin URI:  https://pantheon.io
 * Description: Example of how to create custom blocks.
 * Version:     1.0.0
 * Author:      Pantheon - Professional Services Application Performance Team
 * Author URI:  https://pantheon.io
 * Text Domain: pantheon
 * License:     Proprietary
 */

namespace Pantheon\RefArch;

function register_blocks() {
    \register_block_type( __DIR__ );
}

add_action( 'init', __NAMESPACE__ . '\register_blocks' );