<?php 

function my_menu() {
    register_nav_menu('MyMenu', 'My Menu Location');
    add_theme_support('title-tag');
}
  
add_action('after_setup_theme', 'my_menu');

register_nav_menus(['primary_navigation' => __('Primary Navigation', 'sage')
]);

?>