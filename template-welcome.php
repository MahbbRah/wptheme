
        <?php
         /* 
           Template Name: Welcome Template
         */

         get_header(); ?>

        <section id="banner-area">
            <div class="header-content">
   
                <?php query_posts( array(
                      
                      'post_type' => 'banner',
                      'posts_per_page' => 1,

                )); ?>

                <?php while( have_posts() ): the_post(); ?>
                    <?php the_post_thumbnail('banner-image' ); ?>
                    <?php the_title(); ?>

                <?php endwhile; ?>
                <?php wp_reset_query(); ?>

            </div>
        </section> <!-- End of the banner area -->

        
         
        <section id="slogan-area">
            <div class="container">
                <?php query_posts( array(
                      
                      'post_type' => 'site_title',
                      'posts_per_page' => 1,

                )); ?>

                <?php while( have_posts() ): the_post(); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slogan-header">
                                <h2><?php the_title(); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slogan-content">
                                <h4><?php the_excerpt(); ?></h4>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                
            </div>
        </section> <!-- End of the who we are area -->

        <section id="how-it-work">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-of-work">
                            <h1>Here's How It Works</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php query_posts( array(
                      
                      'post_type' => 'Working_process',
                      'posts_per_page' => 3,

                    )); ?>

                    <?php while( have_posts() ): the_post(); ?>
                        <?php 
                            $service_price= get_post_meta($post->ID, 'service_price', true); 
                        ?>
                    <div class="col-md-4">
                        <div class="working-process">
                           <?php the_post_thumbnail('Working_process_images' ); ?>
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </section> <!-- End of how it work area -->

        <section id="our-services">
            <div class="container">
                <?php query_posts( array(
                      
                      'post_type' => 'Our_services1',
                      'posts_per_page' => 1,

                )); ?>

                <?php while( have_posts() ): the_post(); ?>
                    <?php 
                            $service_price= get_post_meta($post->ID, 'service_price', true); 
                        ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img-one">
                                <?php the_post_thumbnail('Service_images' ); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content-one">
                                <h4><?php the_title(); ?></h4>
                                <em><?php echo $service_price; ?></em>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_query(); ?>  
            </div>
            <div class="container">
                <?php query_posts( array(
                      
                      'post_type' => 'Our_services2',
                      'posts_per_page' => 1,

                )); ?>

                <?php while( have_posts() ): the_post(); ?>
                    <?php 
                            $service_price= get_post_meta($post->ID, 'service_price', true); 
                        ?>
                <div class="row">
                    <div class="col-md-6 img-two-mobile">
                        <div class="img-two">
                            <?php the_post_thumbnail('Service_images' ); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-two">
                            <h4><?php the_title(); ?></h4>
                            <em><?php echo $service_price; ?></em>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                    <div class="col-md-6 img-2-none">
                        <div class="img-two">
                            <?php the_post_thumbnail('Service_images' ); ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>         
            </div>
            <div class="container">
                <?php query_posts( array(
                      
                      'post_type' => 'Our_services3',
                      'posts_per_page' => 1,

                )); ?>

                <?php while( have_posts() ): the_post(); ?>
                    <?php 
                            $service_price= get_post_meta($post->ID, 'service_price', true); 
                        ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-three">
                            <?php the_post_thumbnail('Service_images' ); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-three">
                            <h4><?php the_title(); ?></h4>
                            <em><?php echo $service_price; ?></em>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?> 
            </div>

            <div class="container">
                <?php query_posts( array(
                      
                      'post_type' => 'Our_services4',
                      'posts_per_page' => 1,

                )); ?>

                <?php while( have_posts() ): the_post(); ?>
                    <?php 
                            $service_price= get_post_meta($post->ID, 'service_price', true); 
                        ?>
                <div class="row">
                    <div class="col-md-6 img-mobile">
                        <div class="img-four">
                            <?php the_post_thumbnail('Service_images' ); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-four">
                            <h4><?php the_title(); ?></h4>
                            <em><?php echo $service_price; ?></em>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                    <div class="col-md-6 img-none-four">
                        <div class="img-four">
                            <?php the_post_thumbnail('Service_images' ); ?>
                        </div>
                    </div>
                </div>

                <?php endwhile; ?>
                <?php wp_reset_query(); ?> 
            </div>
            <div class="container">
                <?php query_posts( array(
                      
                      'post_type' => 'Our_services5',
                      'posts_per_page' => 1,

                )); ?>

                <?php while( have_posts() ): the_post(); ?>
                    <?php 
                            $service_price= get_post_meta($post->ID, 'service_price', true); 
                        ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-five">
                            <?php the_post_thumbnail('Service_images' ); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-five">
                            <h4><?php the_title(); ?></h4>
                            <em><?php echo $service_price; ?></em>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?> 
            </div>
            <div class="container">
                <?php query_posts( array(
                      
                      'post_type' => 'Our_services6',
                      'posts_per_page' => 1,

                )); ?>

                <?php while( have_posts() ): the_post(); ?>
                    <?php 
                            $service_price= get_post_meta($post->ID, 'service_price', true); 
                        ?>
                <div class="row">
                    <div class="col-md-6 img-six-mobile">
                        <div class="img-four">
                            <?php the_post_thumbnail('Service_images' ); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-six">
                            <h4><?php the_title(); ?></h4>
                            <em><?php echo $service_price; ?></em>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                    <div class="col-md-6 img-six-none">
                        <div class="img-four">
                            <?php the_post_thumbnail('Service_images' ); ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?> 
            </div>
        </section> <!-- End of Our services area -->

        <section id="our-qualities">
            <div class="container bg-quality">
                <div class="row">
                    <div class="col-md-12">
                        <div class="quality-title">
                            <h3>Our Quality Your Satisfaction</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <?php
                    global $post;
                    $args = array( 'posts_per_page' => 4, 'post_type'=> 'our_qualities' );
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ) : setup_postdata($post); ?>

                        <?php 
                            $quality_post_icon= get_post_meta($post->ID, 'quality_post_icon', true); 
                        ?>
                    <div class="qt-element col-md-3">
                        <div class="quality-area">
                            <div class="icon-area">
                                <i class=" fa fa-<?php echo $quality_post_icon; ?>"></i>
                            </div>   
                            <div class="quality-contents">
                                <h4><?php the_title(); ?></h4>
                                <div class="service-title-sep"></div>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section> <!-- End of our qualities area -->
       
        <section id="client-feedback">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                            <div class="feedbackhh3">
                                <div class="headerline">
                                    <h3>Number of client is increasing day by day. Be one of them !</h3>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <?php query_posts( array(
                          
                          'post_type' => 'client_comments',
                          'posts_per_page' => 3,

                    )); ?>
                     
                    <?php while( have_posts() ): the_post(); ?>
                    <div class="col-md-4">
                        <div class="clients-comment">
                            <div class="client-avatar">
                                <?php the_post_thumbnail('client_avatar_image' ); ?>
                                <h6>
                                    <strong><?php the_title(); ?></strong>
                                </h6>
                            </div>
                            <div class="comment-texts">
                                <p> <?php the_excerpt(); ?> </p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </section> <!-- End of Client feedbacks area -->

        <?php get_template_part('client-forward'); ?>

        <?php get_footer(); ?>