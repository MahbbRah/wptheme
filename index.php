           
           <?php get_template_part('blog-header'); ?>
        	 <?php get_template_part('blog-header-bottom'); ?>
        	</header>
        	<section id="breadcrumb-section">
          		<div class="breadcrumb-area">
            			<div class="container">
              				<div class="row">
                					<div class="col-md-12">
                              <div class="breadcrumb-things">
                                    <div class="breadcrumb-things">
                                        <?php if(function_exists('bcn_display'))
                                        {
                                            bcn_display();
                                        }
                                        ?>
                                  </div>
                              </div>
                					</div>
              				</div>
            			</div>
          		</div>
        	</section>
        	<section id="blog-posts-area">
          		<div class="blog-posts">
            			<div class="container">
                      <?php if(have_posts()) : ?> <?php while(have_posts()) : the_post(); ?>

                      <div class="row single-post-design">
                          <div class="blog-post-content">
                              <div class="col-md-3">
                                  <div class="blog-media item-thumbs">
                                     <a href="" class="hover-wrap"><?php the_post_thumbnail('banner-image' ); ?></a>
                                  </div>
                              </div>
                              <div class="col-md-9">
                                <div class="blog-all-contents">
                                    <div class="blog-contents">
                                        <h2 class="main-post-title"><a href="#"><?php the_title(); ?></a></h2>
                                        <?php the_excerpt(); ?>
                                        <a href="<?php the_permalink(); ?>">Read Details <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                    <div class="blog-meta">
                                        <a href="" class="publish-date" title="Time of publish">
                                        <time class="entrydate" datetime="2014-04-25"><?php the_date(); ?> / </time>
                                        </a> <a href="#"> <?php comments_popup_link( 'No Comments /', 'One comment /', '% Comments /', '', 'Comment is disabled /' ); ?>
                                        </a><a href="#"><?php the_category( '/', $parents, $post_id ); ?> <a href="#"> /</a> </a><?php the_author_posts_link(); ?>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <?php endwhile; ?>
                      <?php endif; ?>
      		        		<div class="pagination-area">
        		        			<div class="container">
          		        				<div class="row">
            		        					<div class="col-md-12">
              		        						<div class="blog-pagination">
                                         <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { include('navigation.php'); } ?>
              		        						</div>
            		        					</div>
          		        				</div>
        		        			</div>
      		        		</div>
                   </div>
                </div>
        	</section>
        	<?php get_template_part('blog-footer'); ?>
        <?php wp_footer(); ?>
        </div>
    </body>
</html>
