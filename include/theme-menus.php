<?php
    // Functions for creating menu of our theme.
    function clippinghand_theme_menus(){
        register_nav_menus(array(
                'main_menu' => 'Main Menu'

            ));
        register_nav_menus(array(
                'blog_menu' => 'Blog Menu'

            ));
        register_nav_menus(array(
                'blog_index_page_footer' => 'Blog main page footer menu'

            ));
    }
    add_action('init', 'clippinghand_theme_menus');

    function clippinghand_fallback(){

        echo '<ul class="main-menu">';
        if ('page' != get_option('show_on_front' )) {
            echo '<li> <a href="'. site_url().'/">Home</a></li>';
        }
        wp_list_pages('title_li=');
        echo '</ul>';
    }