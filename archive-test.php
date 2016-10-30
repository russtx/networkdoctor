<?php 
/* Template Name: Upcoming Events */
get_header(); ?>

	<main role="main">
		<!-- section -->
                
                <div class="postNewsLetter" id="DeskTopOnly">
                    <div class="postNewsLetterBox">
                        <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i><h3>Notify me of latest events and news</h3>
                            <span><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div><!-- postNewsLetter -->
            
            <div class="postAdTop"  id="DeskTopOnly">
                <span><a href="<?php the_permalink(); ?>/classified/place-ad/">Advertise With us <i class="fa fa-play" aria-hidden="true"></i></a></span>
            </div>
            
            <div class="clearfix"></div>
                
		<section class="archiveSection">

                    <div class="searchBar" id="mobileOnly">
                        <?php get_search_form(); ?>
                    </div>
                    <div class="clearfix"></div>
                    <div class="topPageSocials" id="mobileOnly">
                                                    
                        <a href="#/"><i class="fa fa-facebook-square" aria-hidden="true" ></i></a>
                        <a href="#/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                        <a href="#/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>

                    </div>
                    
                    <div class="clearfix"></div>
                    
                   <div class="postArea">
                                <?php
                               $args = array( 'posts_per_page' => 5, 'category' => 6 );
                               $lastposts = get_posts( $args );
                               foreach ( $lastposts as $post ) :
                                 setup_postdata( $post ); ?>

                                <?php  $classes = array( 'eventsPost',);?>

                    <section id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>        

                        <article class="thePost">  

                            <span class="redTop"><h2><?php echo get_post_meta($post->ID, 'date', true); ?></h2></span>

                            <section class="postImage">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </section>  
                            
                            <section class="centerSection">
                            
                                        <span class="postMeta">

                                            <p>Location&#58; &nbsp;<?php echo get_post_meta($post->ID, 'location', true); ?></p>         

                                            <p>Time&#58; &nbsp;<?php echo get_post_meta($post->ID, 'time', true); ?></p>
                                        </span>

                                    <section class="postContent">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <h2><?php  echo the_title(); ?></h2>
                                            <p><?php $content = get_the_content();   $trimmed_content = wp_trim_words( $content, 20, '<a href="'. get_permalink() .'"><span> ...read more &#62;</span></a>' ); ?></p>
                                            <p><?php echo $trimmed_content; ?></p>
                                        </a>
                                    </section>        
                            </section>   
                            
                            <div class="rightSection"> 
                                    <div class="addCalendar" id="deskTopOnly">
                                        <h3>Add to calendar <i class="fa fa-calendar" aria-hidden="true"></i></h3>
                                    </div>


                                    <div class="eventSocials" >


                                        <h3>Share This </h3>
                                        <span>
                                            <a href="#/"><i class="fa fa-facebook-square" aria-hidden="true" ></i></a>
                                            <a href="#/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                            <a href="#/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </span>
                                    </div>

                            </div>

                            </article><!-- thePost -->
                                    <?php endforeach; 
                                    wp_reset_postdata(); ?>


                        </section><!-- post -->                
                    </div><!-- postArea -->
                    
		</section><!-- archiveSection -->
	</main>



<?php get_footer(); ?>
