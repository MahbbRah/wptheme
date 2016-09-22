  <!doctype html>
    <html class="no-js" <?php language_attributes(); ?> >
    <head>
        <meta charset=" <?php bloginfo( 'charset' ); ?> ">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,200' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,200,100,300italic' rel='stylesheet' type='text/css'>

        <?php wp_head(); ?>
    </head>
    <body>
        <header class="header-area">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="contactWay">
                                <em class="phoneWidget">
                                <?php $phone_no = ot_get_option( 'phone_no' ); ?>
                                 <?php if($phone_no) : ?>   <i class="fa fa-phone"></i>
                                    <a href="#"><?php echo $phone_no; ?></a> <?php endif; ?>
                                </em>
                                <em class="emailWidget">
                                <?php $email_id = ot_get_option( 'email_id' ); ?>
                                  <?php if($email_id) : ?>  <i class="fa fa-envelope-o"></i>
                                    <a href="#"><?php echo $email_id; ?></a> <?php endif; ?>
                                </em>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="social_network">
                                <ul>
                                    <?php
                                      
                                      /* get the slider array */
                                      $Social_icons = ot_get_option( 'header_socialButton', array() );
                                      
                                      if ( ! empty( $Social_icons ) ) {
                                        foreach( $Social_icons as $Social_icon ) {
                                          echo '<li><a title="'.$Social_icon['icon_link_title'].'" href="'.$Social_icon['icon_link'].'" ><i class="fa fa-'.$Social_icon['icon_name'].'"></i></a></li>';
                                        }
                                      }

                                     ?>                               
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End of the Top Bar area -->
            <div id="header-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="logo">
                                <?php $header_logo = ot_get_option( 'header_logo' ); ?>
                                <img src="<?php echo $header_logo; ?>" 
                                class="sticky-img img-responsive" alt="">
                                <h2>Clipping Hand</h2>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="main-menu-content">
                                <?php wp_nav_menu(array(

                                  'theme_location' => 'main_menu',
                                   'menu_class'    => 'main-menu ',
                                   'fallback_cb'   => 'clippinghand_fallback',
                                   
                                )) ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </header> <!-- End of Main Header area -->