<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset=" <?php bloginfo( 'charset' ); ?> ">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="wrapper">
        	<header class="box-shadow-header">
        		<div class="blog-top-bar">
        			<div class="container">
        				<div class="row">
        					<div class="col-md-6">
        						<div class="blog-top-left">
                                    <span class="fast-contacts phone">
                                        <?php $blog_phone_no = ot_get_option( 'blog_phone_no' ); ?>
                                        <?php if($blog_phone_no) : ?>
                                        <i class="fa fa-phone"></i> <?php echo $blog_phone_no; ?> <?php endif; ?>
                                    </span>
                                    <span class="fast-contacts email">
                                        <?php $blog_email_id = ot_get_option( 'blog_email_id' ); ?>
                                        <?php if($blog_email_id) : ?>
                                        <i class="fa fa-envelope-o"></i> <?php echo $blog_email_id; ?> <?php endif; ?>
                                    </span>
                                    <span class="fast-contacts skype">
                                        <?php $blog_skype_id = ot_get_option( 'blog_skype_id' ); ?>
                                        <?php if($blog_skype_id) : ?>
                                        <i class="fa fa-skype"></i> <?php echo $blog_skype_id; ?> <?php endif; ?>
                                    </span>
                                </div>
        					</div>
        					<div class="col-md-6">
        						<div class=" top-right">
        							<div class="top-right-content">
	        							<div class="search-area fix-inline">
	        							     <form action="<?php echo site_url(); ?>" role="search" method="get">
	        							     	<input type="text" name="s"  value="">
	        							     	<input type="submit" value="Search">
	        							     </form>
	        							</div>
	        							<div class="login-area fix-inline">
                                            <?php if (is_user_logged_in() ): ?>
                                                <a href="<?php echo wp_logout_url(); ?>" class="logout_button"><i class="fa fa-user fx-margin"></i>Logout</a>
                                            <?php else: ?> 
                                                    <a href="<?php echo wp_login_url( site_url( '/index.php/about-us/' ) ); ?> " class="login_button"><i class="fa fa-user fx-margin"></i>Login</a>
                                                    <a href="<?php echo wp_registration_url(); ?>" class="register_button"><i class="fa fa-user fx-margin"></i>Register</a>
                                            <?php endif ?>
        								    
	        							</div>
	        							<div class="top-socials fix-inline">
	        								<ul>
                                                <?php
                                      
                                                  /* get the slider array */
                                                  $Social_icons = ot_get_option( 'blog_header_socialButton', array() );
                                                  
                                                  if ( ! empty( $Social_icons ) ) {
                                                    foreach( $Social_icons as $Social_icon ) {
                                                      echo '<li><a title="'.$Social_icon['Blog_icon_link_title'].'" href="'.$Social_icon['Blog_icon_link'].'" ><i class="fa fa-'.$Social_icon['Blog_icon_name'].'"></i></a></li>';
                                                    }
                                                  }

                                                ?>
                                            </ul>
	        							</div>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	