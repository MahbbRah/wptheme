<div class="header-bottom">
        			<div class="container">
        				<div class="row">
        					<div class="col-md-2">
        						<div class="header-bottom-left">
        							<?php $Blog_header_logo = ot_get_option( 'Blog_header_logo' ); ?>
                                <a href="<?php site_url(); ?>"><img src="<?php echo $Blog_header_logo;?>" 
                                class="" alt=""></a>
        						</div>
        					</div>
        					<div class="col-md-10">
        						<div class="navigation-area">
        							<div class="blog-main-menu">
        								<?php wp_nav_menu(array(

                                          'theme_location' => 'blog_menu',
                                           'menu_class'    => 'blog-main-menu-ul ',
                                           'fallback_cb'   => 'clippinghand_fallback',
                                           
                                        )) ?>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>