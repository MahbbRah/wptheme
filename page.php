   
    <?php get_header(); ?>
    <section id="slogan-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="slogan-content margin_top">
                            <?php if(have_posts()) : ?> <?php while(have_posts()) : the_post(); ?>

                                  <h2><?php the_title(); ?></h2>
                                  <?php the_post_thumbnail('Service_images' ); ?>
                                  <?php the_content(); ?>

                              <?php endwhile; ?>
                            <?php else : ?>
                                  <h2 class="not-found-page">404 Not Found!</h2>
                            <?php endif; ?>
                        </div>
                    </div>
                        <?php if(! dynamic_sidebar('sidebar_widget')) : ?>
                    	<div class="col-md-4">
							<aside class="right-sidebar">
                                <div class="widget">
                                    <h5 class="widgetheading">Categories</h5>
                                    <ul class="cat">
                                        <li><a href="#">Multiple Tasks</a><span> (20)</span></li>
                                        <li></i><a href="#">Doing things</a><span> (11)</span></li>
                                        <li></i><a href="#">Background remove</a><span> (9)</span></li>
                                        <li></i><a href="#">Multiple Tasks</a><span> (12)</span></li>
                                        <li></i><a href="#">Neck adding</a><span> (18)</span></li>
                                    </ul>
                                </div>
                            </aside>
						</div>
                        <?php endif; ?>
					</div> <!-- .col-md-4 -->
                </div>
            </div>
    </section> <!-- End of the who we are area -->
    <?php get_template_part('client-forward'); ?>
        
    <?php get_footer(); ?>