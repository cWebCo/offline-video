<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://webgarh.com/
 * @since             1.0.0
 * @package           Video_Uploader_For_Tutorlms
 *
 * @wordpress-plugin
 * Plugin Name:       Offload Videos-Bunny.net,AWS S3
 * Description:       Upload videos to Bunny.net and AWS S3 storage via using bunny streaming API's and AWS SDK services
 * Version:           1.0.0
 * Author:            Webgarh Solutions
 * Author URI:        https://webgarh.com/
 * License:           GPL-2.0+
 * License URI:       https://webgarh.com/
 * Text Domain:       offload_video
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$PluginTextDomain="offload_video";
define( 'OFFLOAD_VIDEO_VERSION', '1.0.0' );
define('BUNNY_LIBRARY_URL','https://video.bunnycdn.com/library');
define('STREAMING_PLUGIN_PATH',plugin_dir_path( __FILE__ ));
define('STREAMING_PLUGIN_NAME','offload-videos');
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-video-uploader-for-tutorlms-activator.php
 */
function offload_video_activate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-offload-video-activator.php';
	Offload_video_Activator::activate();
}

//add_filter( 'script_loader_tag', 'add_id_to_script', 10, 3 );
 function add_id_to_script( $tag, $handle, $source ) {
    if ( 'crypto-sha256' === $handle ) {
        $tag = '<script type="text/javascript" src="' . $source . '" integrity="sha512-fv28nWHTcWfoN3KBd2fs+YWsirQ+L0b/iIRS7HcNDPSAwxy6oSjRrYjQ+OtJoJz0wUKsVcPYgwcZzK04KfHD0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>';
    }
     if ( 'crypto-js.min' === $handle ) {
        $tag = '<script type="text/javascript" src="' . $source . '" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>';
    }
    return $tag;
}
/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-video-uploader-for-tutorlms-deactivator.php
 */
function offload_video_deactivate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-offload-video-deactivator.php';
	Offload_video_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'offload_video_activate' );
register_deactivation_hook( __FILE__, 'offload_video_deactivate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-offload-video.php';
//require plugin_dir_path( __FILE__ ) . 'includes/shortcode.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_offload_video() {

	$plugin = new Offload_video();
	$plugin->run();

}
run_offload_video();
