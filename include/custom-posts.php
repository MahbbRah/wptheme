<?php 
    // Function for creating custom posts
    function clippinghand_custom_post(){

      register_post_type('banner', array(

              'public' =>  true,
              'label' =>  'Banner Image',
              'labels' =>  array(
                  'Name'  =>  'Images',
                  'singular_name'  =>  'Image',
                  'add_new'  =>  'Add new image',
                ),
              'supports'  =>  array('thumbnail','title'),
        ));
      // Registering custom posts for site slogan area
      register_post_type('site_title', array(

              'public' =>  true,
              'label' =>  'Site slogan',
              'labels' =>  array(
                  'Name'  =>  'Slogans',
                  'singular_name'  =>  'slogan',
                  'add_new'  =>  'Add new slogan',
                ),
              'supports'  =>  array('editor','title','excerpt'),
        ));
       // Registering custom posts for site working process area
      register_post_type('Working_process', array(

              'public' =>  true,
              'label' =>  'working process(3 column)',
              'labels' =>  array(
                  'Name'  =>  'working process',
                  'singular_name'  =>  'system',
                ),
              'supports'  =>  array('editor','title','excerpt','thumbnail'),
        ));
      // Registering custom posts for site all services.
      register_post_type('Our_services1', array(

              'public' =>  true,
              'label' =>  'Our Services 1',
              'labels' =>  array(
                  'Name'  =>  'Services',
                  'singular_name'  =>  'Service',
                ),
              'supports'  =>  array('editor','title','excerpt','thumbnail','custom-fields'),
        ));

      register_post_type('Our_services2', array(

              'public' =>  true,
              'label' =>  'Our Services 2',
              'labels' =>  array(
                  'Name'  =>  'Services',
                  'singular_name'  =>  'Service',
                ),
              'supports'  =>  array('editor','title','excerpt','thumbnail','custom-fields'),
        ));

      register_post_type('Our_services3', array(

              'public' =>  true,
              'label' =>  'Our Services 3',
              'labels' =>  array(
                  'Name'  =>  'Services',
                  'singular_name'  =>  'Service',
                ),
              'supports'  =>  array('editor','title','excerpt','thumbnail','custom-fields'),
        ));

      register_post_type('Our_services4', array(

              'public' =>  true,
              'label' =>  'Our Services 4',
              'labels' =>  array(
                  'Name'  =>  'Services',
                  'singular_name'  =>  'Service',
                ),
              'supports'  =>  array('editor','title','excerpt','thumbnail','custom-fields'),
        ));

      register_post_type('Our_services5', array(

              'public' =>  true,
              'label' =>  'Our Services 5',
              'labels' =>  array(
                  'Name'  =>  'Services',
                  'singular_name'  =>  'Service',
                ),
              'supports'  =>  array('editor','title','excerpt','thumbnail','custom-fields'),
        ));

      register_post_type('Our_services6', array(

              'public' =>  true,
              'label' =>  'Our Services 6',
              'labels' =>  array(
                  'Name'  =>  'Services',
                  'singular_name'  =>  'Service',
                ),
              'supports'  =>  array('editor','title','excerpt','thumbnail','custom-fields'),
        ));
      // Registering custom posts for site Qualities area
      register_post_type('our_qualities', array(

              'public' =>  true,
              'label' =>  'Our quality(4 column)',
              'labels' =>  array(
                  'Name'  =>  'Qualities',
                  'singular_name'  =>  'Quality',
                ),
              'supports'  =>  array('editor','title','excerpt', 'custom-fields'),
        ));
      // Registering custom posts for site Client comments area.
      register_post_type('client_comments', array(

              'public' =>  true,
              'label' =>  'Client comments(3 column)',
              'labels' =>  array(
                  'Name'  =>  'comments',
                  'singular_name'  =>  'comment',
                ),
              'supports'  =>  array('editor','title','excerpt', 'thumbnail'),
        ));
      // Registering custom posts for site Client action area
      register_post_type('client_action', array(

              'public' =>  true,
              'label' =>  'Client Action(3 column)',
              'labels' =>  array(
                  'Name'  =>  'comments',
                  'singular_name'  =>  'comment',
                ),
              'supports'  =>  array('editor','title','excerpt', 'thumbnail'),
        ));
    }

    add_action('init','clippinghand_custom_post');

?>