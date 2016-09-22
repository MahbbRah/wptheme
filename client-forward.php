<section id="client-forward">
            <div class="container">
                <div class="row">
                        <div class="col-md-12">
                            <div class="heading-text-clients">
                                <h3>Join the 5000+ satisfied customers today</h3>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <?php query_posts( array(
                  
                          'post_type' => 'client_action',
                          'posts_per_page' => 3,

                    )); ?>
                    <?php while( have_posts() ): the_post(); ?>
                    <div class="col-md-4">
                        <div class="contact-box">
                            <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('quotes_image' ); ?>
                            <h3 class="contact_boxh3"><?php the_title(); ?></h3>
                            <p class="contact_boxp"><?php the_excerpt(); ?></p></a>
                        </div>
                    </div>    
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </section> <!-- End of Client Forward area -->