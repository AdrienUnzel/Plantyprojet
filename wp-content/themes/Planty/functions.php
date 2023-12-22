<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}


function masquer_element_admin_non_connecte( $items, $args )
{   
if (is_user_logged_in() && $args->theme_location == 'primary') {
  
 $items .= '<li id="menu-item-901" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-901"><a href="http://localhost/Planty/wp-admin/">Admin</a></li>';
 
}

return $items;
}
add_filter( 'wp_nav_menu_items', 'masquer_element_admin_non_connecte', 10, 2 );

/*echo "<pre>".htmlentities(print_r($items, true))."</pre>";
 die;*/
 


 