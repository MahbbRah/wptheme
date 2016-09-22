                
                <?php get_template_part('blog-header'); ?>
                <?php get_template_part('blog-header-bottom'); ?>
        	</header>
        	<section id="breadcrumb-section">
        		<div class="breadcrumb-area">
        			<div class="container">
        				<div class="row">
        				<?php if(have_posts()) : ?> <?php while(have_posts()) : the_post(); ?>
        					<div class="col-md-9">
        						<div class="breadcrumb-content">
        							<h2 class="main-post-title"><?php the_title(); ?></h2>
        						</div>
        					</div>
        					<div class="col-md-3">
        						<div class="breadcrumb-things">
        							<?php if(function_exists('bcn_display'))
								    {
								        bcn_display();
								    }?>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</section>
        	<section id="blog-posts-area">
        		<div class="blog-posts">
        			<div class="container">
	                    <div class="row">
	                    	<div class="col-md-12">
	                    		<div class="blog-meta-single">
			                          <span><i class="fa fa-clock-o"></i><a href="" class="publish-date" title="Time of publish">
			                            <time class="entrydate" datetime="2014-04-25"><?php the_date(); ?> </time>
			                          </a>  <i class="fa fa-comments-o"></i> <?php comments_popup_link( 'No Comments ', 'One comment ', '% Comments ', '', 'Comment is disabled ' ); ?>
			                          <i class="fa fa-square-o"></i><a href="#"><?php the_category('/', $parents, $post_id ); ?></a> <i class="fa fa-user"></i> <?php the_author_posts_link(); ?></span>
		                       </div>
	                    	</div>
	                    </div>
		                <div class="row">
		                    <div class="col-md-8">
		                        <div class="blog-contents blog-contents-margin-right">
	                                  <?php the_post_thumbnail('blog_single_image');   ?>
	                                  <div class="post-content-p">
	                                  	   <?php the_content(); ?>
	                                  </div>
	                                  <div class="tag-lists">
	                                  	   <?php echo get_the_tag_list(); ?>
	                                  </div>
	                                  <!--
	                                  <div class="share_button_content">
	                                  	   <a href="" >Share this article</a>
	                                  </div> -->
                                </div>
		                    </div>
			                <div class="col-md-4">
			                	<aside class="blog-right-sidebar">
                                    <?php if(! dynamic_sidebar('blog_sidebar_widget')) : ?>
		                    		<div class="blog-sidebar-contents">
		                    		    <h2>Recent Posts</h2>
		                    			<ul>
		                    				<li><a href="">This is the post you know</a><span class="post-date">02 Agusut, 2050</span></li>
		                    				<li><a href="">This is the post you know</a><span class="post-date">02 Agusut, 2050</span></li>
		                    				<li><a href="">This is the post you know</a><span class="post-date">02 Agusut, 2050</span></li>
		                    				<li><a href="">This is the post you know</a><span class="post-date">02 Agusut, 2050</span></li>
		                    				<li><a href="">This is the post you know</a><span class="post-date">02 Agusut, 2050</span></li>
		                    				<li><a href="">This is the post you know</a><span class="post-date">02 Agusut, 2050</span></li>
		                    			</ul>
		                    		</div>
		                    		<div class="blog-sidebar-contents">
		                    		    <h2>Recent Posts</h2>
		                    			<ul>
		                    				<li><a href="">This is the post you know</a><span class="post-date">02 Agusut, 2050</span></li>
		                    				<li><a href="">This is the post you know</a><span class="post-date">02 Agusut, 2050</span></li>
		                    				<li><a href="">This is the post you know</a><span class="post-date">02 Agusut, 2050</span></li>
		                    				<li><a href="">This is the post you know</a><span class="post-date">02 Agusut, 2050</span></li>
		                    				<li><a href="">This is the post you know</a><span class="post-date">02 Agusut, 2050</span></li>
		                    				<li><a href="">This is the post you know</a><span class="post-date">02 Agusut, 2050</span></li>
		                    			</ul>
		                    		</div>
		                    	    <?php endif; ?>
			                    </aside>
			                </div>
		               </div>
		           </div>
        	</section>
            <section id="about_the_author">
            	<div class="container">
            		<div class="row">
            			<div class="col-md-8">
            				<div class="about-the-author">
	                          	<h2><i class=" fa fa-user user-icon"></i> About the author</h2>
	                          	   <div class="author-details">
	                          	        <?php echo get_avatar( get_the_author_meta( 'user_email' ), 70 ); ?>
	                          	   	    <h2><?php echo get_the_author(); ?></h2>
	                          	   	    <p><?php the_author_meta( 'description' ); ?> <a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">View all posts by <?php get_the_author(); ?> <span class="meta-nav">&rarr;</span></a></p>
	                          	   </div>
	                          </div>
            			</div>
            		</div>
            	</div>
            </section>
            <section id="related_posts_area">
            	<div class="container">
            		<div class="row">
            			<div class="col-md-8">
            				<div class="related-posts-s">
            				        <h2><i class=" fa fa-folder-open-o related-post-icon"></i> Related Posts</h2>
            				        <?php
										// Reference : http://codex.wordpress.org/Function_Reference/wp_get_post_tags
										// we are using this function to get an array of tags assigned to current post
										$tags = wp_get_post_tags($post->ID);
										 
										if ($tags) {
										 
										    $first_tag = $tags[0]->term_id; // we only need the id of first tag
										 
										    // arguments for query_posts : http://codex.wordpress.org/Function_Reference/query_posts
										    $args = array(
										            'tag__in' => array($first_tag),
										            'post__not_in' => array($post->ID),
										            'showposts' => 4, // these are the number of related posts we want to display
										            'ignore_sticky_posts' => 1 // to exclude the sticky post
										            );
										 
										    // WP_Query takes the same arguments as query_posts
										    $related_query = new WP_Query($args);
										 
										    if ($related_query->have_posts()) {
										    ?>
										 
										        <ul class="related-posts">
										 
										            <?php
										            while ($related_query->have_posts()) : $related_query->the_post();
										            ?>
										                <li>
										                    <a href="<?php the_permalink() ?>" ><?php the_post_thumbnail('blog_single_image'); ?> </br> <p><?php the_title();?></p> </a>
										                </li>
										            <?php
										            endwhile;
										            ?>
										 
										        </ul>
										 
										<?php }
										    wp_reset_query(); // to reset the loop : http://codex.wordpress.org/Function_Reference/wp_reset_query
										}
									?>
                          	   </div>
                          </div>
            			</div>
            		</div>
            	</div>
            </section>
            <section id="comments_area_blog">
            	<div class="container">
            		<div class="row">
            			<div class="col-md-8">
            				<div class="comments-area-blog">
		                      	   <div class="single_comment_blog">
		                      	   	    <?php
										// If comments are open or we have at least one comment, load up the comment template.
										if ( comments_open() || get_comments_number() ) :
											comments_template();
										endif;
										?>
									  <?php endwhile; ?>
					                  <?php else : ?>
					                  	<h2 class="not-found-page">404 Not Found!</h2>
					                  <?php endif; ?>
		                      	   </div>
		                      </div>
            			</div>
            		</div>
            	</div>
            </section>
            <section id="blog-footer-top">
           	    <div class="blog-footer-area">
           	       <div class="container">
	           	    	<div class="row">
	           	    	    <?php if(! dynamic_sidebar('blog_footer_widget')) : ?>
	           	    		<div class="col-md-3">
	           	    			<div class="blog-footer-widget">
	           	    				<h2> Footer widget 1</h2>
           	    				    <ul>
	                    				<li><a href="">This is the post you know</a></li>
	                    				<li><a href="">post you know This is the post</a></li>
	                    				<li><a href="">This is the post you know</a></li>
	                    				<li><a href="">This is the post you know</a></li>
	                    				<li><a href="">This is the post you know</a></li>
	                    			</ul>
	           	    			</div>
	           	    		</div>
	           	    		<div class="col-md-3">
	           	    			<div class="blog-footer-widget">
	           	    				<h2> Footer widget 1</h2>
           	    				    <ul>
	                    				<li><a href="">This is the post you know</a></li>
	                    				<li><a href="">post you know This is the post</a></li>
	                    				<li><a href="">This is the post you know</a></li>
	                    				<li><a href="">This is the post you know</a></li>
	                    				<li><a href="">This is the post you know</a></li>
	                    			</ul>
	           	    			</div>
	           	    		</div>
	           	    		<div class="col-md-3">
	           	    			<div class="blog-footer-widget">
	           	    				<h2> Footer widget 1</h2>
           	    				    <ul>
	                    				<li><a href="">This is the post you know</a><span>October 08, 2015</span></li>
	                    				<li><a href="">This is the post you know</a><span>October 08, 2015</span></li>
	                    				<li><a href="">This is the post you know</a><span>October 08, 2015</span></li>
	                    				<li><a href="">This is the post you know</a><span>October 08, 2015</span></li>
	                    				<li><a href="">This is the post you know</a><span>October 08, 2015</span></li>
	                    				<li><a href="">This is the post you know</a><span>October 08, 2015</span></li>
	                    			</ul>
	           	    			</div>
	           	    		</div>
	           	    		<div class="col-md-3">
	           	    			<div class="blog-footer-widget">
	           	    				<h2> Footer widget 1</h2>
           	    				    <ul>
	                    				<li><a href="">This is the post you know</a><span>October 08, 2015</span></li>
	                    				<li><a href="">This is the post you know</a><span>October 08, 2015</span></li>
	                    				<li><a href="">This is the post you know</a><span>October 08, 2015</span></li>
	                    				<li><a href="">This is the post you know</a><span>October 08, 2015</span></li>
	                    				<li><a href="">This is the post you know</a><span>October 08, 2015</span></li>
	                    				<li><a href="">This is the post you know</a><span>October 08, 2015</span></li>
	                    			</ul>
	           	    			</div>
	           	    		</div>
	           	    	</div>
	           	        <?php endif; ?>
           	    	</div>
           	    </div>
           </section>
           <?php get_template_part('blog-footer'); ?>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>
