<footer id="blog-footer-section">
        		<div class="container">
        			<div class="row">
                   <div class="col-md-4">
                        <div class="main-blog-footer">
                             <?php
            
                                /* get the footer array */
                                $footer_copyright_texts = ot_get_option( 'blog_copyrigth_texts', array() );
                                
                                if ( ! empty( $footer_copyright_texts ) ) {
                                  foreach( $footer_copyright_texts as $footer_copyright_text ) {
                                    echo '<a href="'.$footer_copyright_text['blog_footer_text_url'].'">'.$footer_copyright_text['blog_text_of_url'].'</a>';
                                  }
                                }
                              ?>
                        </div>                     
                   </div>
        			     <div class="col-md-8">
                        <?php if(! dynamic_sidebar('blog_footer_menu_widget')) : ?>
                        <div class="footer-right">
                             <div class="blog-footer-menu">
                                  <ul>
                                      <li><a href="">This</a></li>
                                      <li><a href="">world</a></li>
                                      <li><a href="">dontBe</a></li>
                                      <li><a href="">GoHell</a></li>
                                      <li><a href="">BadBoys</a></li>
                                  </ul>
                             </div>
                        </div>
                        <?php endif; ?>                     
                   </div>
        			</div>
        		</div>
        	</footer>