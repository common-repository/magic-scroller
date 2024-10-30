<?php

function magic_scroller_setting() {
	add_menu_page(
		'magic scroller settings',
		'magic scroller',
		'manage_options',
		'magic_scroller',
		'magic_scroller_settings'
	);
	add_submenu_page(
		'magic_scroller' ,
		'learn use',
		'learn use plugin',
		'manage_options',
		'magic_scroller_work',
		'magic_scroller_work_page'
	);
}


function magic_scroller_work_page(){
	include MAGICSC_TPL . "admin/work.php";
}

function magic_scroller_settings() {
	$magic_scroller_options = get_option( 'magic_scroller_options', [] );
	if ( isset( $_POST['savedata'] ) ) {

		$magic_scroller_options['magic_scroller_sc_color']    = sanitize_text_field( $_POST['magic_scroller_sc_color'] );
		$magic_scroller_options['magic_scroller_back_sc_color'] = sanitize_text_field( $_POST['magic_scroller_back_sc_color'] );
		$magic_scroller_options['magic_scroller_hover_back_sc_color'] = sanitize_text_field( $_POST['magic_scroller_hover_back_sc_color'] );
		$magic_scroller_options['magic_scroller_sc_with'] = sanitize_text_field( $_POST['magic_scroller_sc_with'] );
		$magic_scroller_options['magic_scroller_sc_border'] = sanitize_text_field( $_POST['magic_scroller_sc_border'] );

		update_option( 'magic_scroller_options', $magic_scroller_options );
	}
	include MAGICSC_TPL . "admin/settings.php";
}

$magic_scroller_options = get_option( 'magic_scroller_options', [] );

add_action( 'admin_menu', 'magic_scroller_setting' );
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
	background-color: <?php echo esc_html($magic_scroller_options['magic_scrollerr_hover_back_sc_color'])?>;
	}
</style>