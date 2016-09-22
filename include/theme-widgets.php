<?php
    // Registering default widgets for our theme.
    function clippinghand_theme_widgets(){
        register_sidebar(array(
                'name' => ' Footer widgets',
                'id' => 'footer_widget',
                'description' => 'Use this widget for your site footer',
                'before_widget' => '<div class="col-md-3"><div class="address-texts">',
                'after_widget' => '</div></div>',
                'before_title' => '<h2>',
                'after_title' => '</h2>',
                '' => '',
                '' => '',

            ));
        register_sidebar(array(
                'name' => 'blog Footer widgets',
                'id' => 'blog_footer_widget',
                'description' => 'Use this widget for your site footer',
                'before_widget' => '<div class="col-md-3"><div class="blog-footer-widget">',
                'after_widget' => '</div></div>',
                'before_title' => '<h2>',
                'after_title' => '</h2>',
                '' => '',
                '' => '',

            ));
        register_sidebar(array(
                'name' => 'blog Footer menu widget',
                'id' => 'blog_footer_menu_widget',
                'description' => 'Use this widget for your blog site footer mwnu',
                'before_widget' => '<div class="footer-right"><div class="blog-footer-menu">',
                'after_widget' => '</div></div>',
                'before_title' => '<h2>',
                'after_title' => '</h2>',
                '' => '',
                '' => '',

            ));
        register_sidebar(array(
                'name' => ' Sidebar widgets',
                'id' => 'sidebar_widget',
                'description' => 'Use this widget on sidebar for you site',
                'before_widget' => '<div class="col-md-4"><aside class="right-sidebar"><div class="widget">',
                'after_widget' => '</div></aside></div>',
                'before_title' => '<h5 class="widgetheading">',
                'after_title' => '</h5>',
                '' => '',
                '' => '',

            ));
        register_sidebar(array(
                'name' => 'blog Sidebar widgets',
                'id' => 'blog_sidebar_widget',
                'description' => 'Use this widget on sidebar for you site',
                'before_widget' => '<div class="blog-sidebar-contents">',
                'after_widget' => '</div>',
                'before_title' => '<h2>',
                'after_title' => '</h2>',
                '' => '',
                '' => '',

            ));
    }
    add_action('widgets_init','clippinghand_theme_widgets');

    