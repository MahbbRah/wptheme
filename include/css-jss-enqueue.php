<?php
    // Function for calling our CSS and JS files.
    function adding_css_stylesheet(){
        
        //Registering CSS Stylesheet//
        wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css',array(),'1.0','all');
    	wp_register_style('Bootstrap', get_template_directory_uri() . '/include/bootstrap/css/bootstrap.min.css',
    		array(), '3.2.0', 'all');
    	wp_register_style('font-awesome', get_template_directory_uri().
    		'/include/fontAwesome/css/font-awesome.min.css',array(), '4.2.0', 'all');
    	wp_register_style('slicknav',get_template_directory_uri().'/css/slicknav.css',array(),'1.0','all');
    	wp_register_style('style',get_template_directory_uri().'/style.css',array(),'1.0','all');
        wp_register_style('responsive',get_template_directory_uri().'/css/responsive.css',array(),'1.0','all');
        wp_register_style('blog',get_template_directory_uri().'/css/blog.css',array(),'1.0','all');
        wp_register_style('responsive-blog',get_template_directory_uri().'/css/responsive-blog.css',array(),'1.0','all');
    	
    	// Enqueueing CSS stylesheet
        wp_enqueue_style('normalize');
    	wp_enqueue_style('Bootstrap');
    	wp_enqueue_style('font-awesome');
    	wp_enqueue_style('slicknav');
    	wp_enqueue_style('style');
        wp_enqueue_style('responsive');
        wp_enqueue_style('blog');
        wp_enqueue_style('responsive-blog');
    	
    	// Enqueueing Javascript files.
    	wp_enqueue_script('jquery-js', get_template_directory_uri().'/js/jquery.min.js',array(),'1.11',true);
        wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js',array('jquery'),'1.0',true);
    	wp_enqueue_script('blog-main', get_template_directory_uri().'/js/blog-main.js',array('jquery'),'1.0',true);
        wp_enqueue_script('sticky-js', get_template_directory_uri().'/js/jquery.sticky.js',array('jquery'),'1.0',true);
    	wp_enqueue_script('niceScroll-js', get_template_directory_uri().'/js/jquery.nicescroll.min.js',array('jquery'),'3.6.0',true);
    	wp_enqueue_script('scroll-js', get_template_directory_uri().'/js/jquery.scrollUp.min.js',array('jquery'),'1.0',true);
    	wp_enqueue_script('slicknav-js', get_template_directory_uri().'/js/jquery.slicknav.min.js',array('jquery'),'1.0',true);
        wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/include/bootstrap/js/bootstrap.min.js',array('jquery'),'3.2.0',true);
    	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/include/bootstrap/js/bootstrap.min.js',array('jquery'),'3.2.0',true);
    }
    add_action('wp_enqueue_scripts',  'adding_css_stylesheet');