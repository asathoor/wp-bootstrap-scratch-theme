<?php
// menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' )); // menu defined as header menu
}
add_action( 'init', 'register_my_menu' );

/*
 * See: https://codex.wordpress.org/Navigation_Menus
 * In the theme you add the menu like this (e.g. in the index.php or perhaps the sidebar as you prefer)
 *    wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
 * You can style the menu with bootstrap, try this plugin:
 * https://wordpress.org/plugins/wp-bootstrap-navmenu/
*/
?>
