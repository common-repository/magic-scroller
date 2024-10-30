<?php
/*
Plugin Name: magic scroller
Plugin URI: https://sarzamin-site.ir
Description: best plugin for change scrollbar color
Version: 1.2
Author: saleh attari
Author URI: mailto:salehattari1386@gmail.com
Text Domain: scroll-color
Domain Path: /scroll-color/
*/

define( 'MAGICSC_DIR', plugin_dir_path( __FILE__ ) );
define( 'MAGICSC_URL', plugin_dir_url( __FILE__ ) );
define( 'MAGICSC_ASSETS', MAGICSC_URL . 'assets/' );
define( 'MAGICSC_INC', MAGICSC_DIR . '/inc/' );
define( 'MAGICSC_TPL', MAGICSC_DIR . '/tpl/' );

/**
 * Load plugin textdomain.
 */

add_action( 'init', 'magicsc_load_textdomain' );
  
function magicsc_load_textdomain() {
	load_plugin_textdomain('magic-scroller' , get_template_directory() . '/languages');
}



if ( is_admin() ) {
	include MAGICSC_INC . "admin.php";
}
$magic_scroller_options = get_option( 'magic_scroller_options', [] );
?>
<style>
	html::-webkit-scrollbar {
	background-color: <?php echo esc_html($magic_scroller_options['magic_scroller_back_sc_color'])?>;
	width: <?php echo esc_html($magic_scroller_options['magic_scroller_sc_with'])?>;
	}
	html::-webkit-scrollbar-thumb {
	border-radius: <?php echo esc_html($magic_scroller_options['magic_scroller_sc_border'])?>;
	background-color:  <?php echo esc_html($magic_scroller_options['magic_scroller_sc_color'])?>;
	}
	html::-webkit-scrollbar-thumb:hover {
	background-color: <?php echo esc_html($magic_scroller_options['magic_scroller_hover_back_sc_color'])?>;
	}
</style>