<?php
/**
 * Demo Import Data
 *
 * @package thecraft
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function wprt_import_files() {
    return array(
        array(
            'import_file_name'           => 'Demo Import',
            'import_file_url'            => 'https://ninzio.com/craft/_demo/content.xml',
            'import_widget_file_url'     => 'https://ninzio.com/craft/_demo/widget.wie',
            'import_customizer_file_url' => 'https://ninzio.com/craft/_demo/setting.dat',
            'import_preview_image_url'   => 'https://ninzio.com/craft/_demo/preview-import.jpg',
            'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'thecraft' ),
            'preview_url'                => 'https://ninzio.com/craft/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'wprt_import_files' );

function wprt_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
    $service_menu = get_term_by( 'name', 'Service Menu', 'nav_menu' );
    $bottom_menu = get_term_by( 'name', 'Bottom Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'service' => $service_menu->term_id,
            'bottom' => $bottom_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home 1' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'wprt_after_import_setup' );