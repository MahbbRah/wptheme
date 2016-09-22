<?php
    // Included Enqueue files
    include_once('include/css-jss-enqueue.php');

    //Menu functions for clipping hand theme
    include_once('include/theme-menus.php');

    // Custom posts supporting
    include_once('include/custom-posts.php');
    
    // default supports of this theme
    include_once('include/default-theme-supports.php');
    
    // default bootstrap responsive support
    include_once('include/responsive-img.php');
    
    
    // Theme widgets
    include_once('include/theme-widgets.php');
     
    // Theme widgets
    include_once('include/breadcrumb-function.php');
     
    
    
    
	 /**
	 * Required: set 'ot_theme_mode' filter to true.
	 */
	add_filter( 'ot_theme_mode', '__return_true' );

	/**
	 * Required: include OptionTree.
	 */
	require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );   
    
    // add option tree theme 
    include_once('include/theme-options.php');

    




?>