
<footer id="footer_area">
            <div class="container">
                <div class="full-footer-area">
                    <div class="row">
                        <?php if(! dynamic_sidebar('footer_widget')) : ?>
                    <div class="col-md-3">
                        <div class="address-texts">
                            <div class="textwidget">
                               <h2>Contact detail</h2>
                               <div class="h2-seperator"></div>
                                    <address>
                                        <i class="fa fa-map-marker"></i> College Road, Mondir Para<br>
                                        Thakurgaon 5100.<br>
                                        Bangladesh.<br>
                                        <i class="fa fa-phone"></i> Phone. +88 0561 53701<br>
                                        <i class="fa fa-skype"></i>
                                        <a rel="nofollow" href="skype:clippinghand?call">Call us on Skype</a>
                                        <br>
                                        <i class="fa fa-envelope"></i> E-mail. <a href="mailto:info@clippinghand.com">info@clippinghand.com</a>
                                    </address>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="latest-blog-updates">
                            <h2>From Our Blog</h2>
                            <div class="h2-seperator"></div>
                            <p>The Latest software apps for clipping path</p>
                            <p>How to hire the finest photo editing provider</p>
                            <p>How to hire the finest photo editing provider</p>
                            <p>The Latest software apps for clipping path</p>
                            <p>How to hire the finest photo editing provider</p>
                            <p>How to hire the finest photo editing provider</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="useful-links">
                            <h2>Useful links</h2>
                            <div class="h2-seperator"></div>
                            <ul class="nav-useful">
                                <li><a href="">About Us</a></li>
                                <li><a href="">Moneyback Guarantee</a></li>
                                <li><a href="">Manage Jobs</a></li>
                                <li><a href="">Frequently Asked Questions</a></li>
                                <li><a href="">Terms and Conditions</a></li>
                                <li><a href="">Services</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php endif; ?>

                
                </div>
                <div class="row ">
                    <div class="seperator-border">
                        <div class="col-md-6">
                            <div class="footer_text">
                            <?php
                              
                              /* get the footer array */
                              $footer_copyright_texts = ot_get_option( 'copyrigth_texts', array() );
                              
                              if ( ! empty( $footer_copyright_texts ) ) {
                                foreach( $footer_copyright_texts as $footer_copyright_text ) {
                                  echo '<p> '.$footer_copyright_text['normal_text'].' <a href="'.$footer_copyright_text['footer_text_url'].'">'.$footer_copyright_text['text_of_url'].'</a></p>';
                                }
                              }

                             ?>                              
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-social-network">
                                <ul>
                                <?php
                              
                                  /* get the footer array */
                                  $footer_social_buttons = ot_get_option( 'footer_socialButton', array() );
                                  
                                  if ( ! empty( $footer_social_buttons ) ) {
                                    foreach( $footer_social_buttons as $footer_social_button ) {
                                      echo '<li><a href="'.$footer_social_button['footer_icon_link'].'" 
                                      title="'.$footer_social_button['footer_icon_title'].'">
                                      <i class="fa fa-'.$footer_social_button['footer_icon_name'].'"></i></a></li>';
                                    }
                                  }

                                 ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer> <!-- End of the footer area -->
        <?php wp_footer(); ?>
    </body>
</html>
