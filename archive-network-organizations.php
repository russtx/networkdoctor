<?php 
/* Template Name: Network Organizations */
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
            
                        <section class="adAreaTop">
                            <?php    
                              $args = array( 'post_type' => 'ads','orderby' =>  'rand', 
                                  'posts_per_page' => '1' );  
                              $loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post();?>        
                                <div class="ads" >        
                             
                                    <?php $key="external_link_key"; $single=1; $external_link = get_post_meta($post->ID, $key, $single); ?>  

<?php if($external_link == ""){ ?>
	<a href="<?php the_permalink(); ?>  " title="<?php the_title(); ?>" > <?php the_post_thumbnail(); ?></a> <?php ;}
else{ ?>
	<a href="<?php echo $external_link; ?>" target="_blank" title="<?php the_title(); ?>"> <?php the_post_thumbnail(); ?></a> <?php } ?>
                                </div>    
                             <?php endwhile; ?>
                        </section><!-- adArea --> 
            
            <div class="clearfix"></div>
                
		<section class="archiveSection">

                    <div class="searchBar" id="mobileOnly">
                        <?php get_search_form(); ?>
                    </div>
                    <div class="clearfix"></div>
                    <div class="topPageSocials" id="mobileOnly">
                                                    
                        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank"><i class="fa fa-facebook-square" aria-hidden="true" ></i></a>
                        <a href="https://www.linkedin.com/cws/share?url="<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                        <a href="#/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>

                    </div>
                    
                    <div class="clearfix"></div>
                    
                   <section class="postArea">
                                <?php
                               $args = array( 'posts_per_page' => 3, 'category' => 8 );
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
                            
                                        

                                    <section class="postContent">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <h2><?php  echo the_title(); ?></h2>
                                            <p><?php $content = get_the_content();   $trimmed_content = wp_trim_words( $content, 20, '<a href="'. get_permalink() .'"><span> ...read more &#62;</span></a>' ); ?></p>
                                            <p><?php echo $trimmed_content; ?></p>
                                        </a>
                                    </section>        
                            </section>   
                            
                            <div class="rightSection"> 
                                    <!-- <div class="addCalendar" id="deskTopOnly">
                                        <h3>Add to calendar <i class="fa fa-calendar" aria-hidden="true"></i></h3>
                                    </div> -->


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


                        </section><!-- post1 -->                
                    </section><!-- postArea -->
                    
                    
                        <section class="adArea">
                              <?php    
                              $args = array( 'post_type' => 'ads','orderby' => 'rand', 
                                  'posts_per_page' => '1' );  
                              $loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post();?>        
                                <div class="ads" >        
                             
                                    <?php $key="external_link_key"; $single=1; $external_link = get_post_meta($post->ID, $key, $single); ?>  

<?php if($external_link == ""){ ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_post_thumbnail(); ?></a> <?php ;}
else{ ?>
	<a href="<?php echo $external_link; ?>" target="_blank" title="<?php the_title(); ?>"> <?php the_post_thumbnail(); ?></a> <?php } ?>   
                                </div>    
                             <?php endwhile; ?>
                        </section><!-- adArea --> 
                    
                    
                    
                    <section class="postArea">
                                <?php
                               $args = array( 'posts_per_page' => 3, 'offset' => 3, 'category' => 8 );
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
                            
                                        

                                    <section class="postContent">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <h2><?php  echo the_title(); ?></h2>
                                            <p><?php $content = get_the_content();   $trimmed_content = wp_trim_words( $content, 20, '<a href="'. get_permalink() .'"><span> ...read more &#62;</span></a>' ); ?></p>
                                            <p><?php echo $trimmed_content; ?></p>
                                        </a>
                                    </section>        
                            </section>   
                            
                            <div class="rightSection"> 
                                   <!-- <div class="addCalendar" id="deskTopOnly">
                                        <h3>Add to calendar <i class="fa fa-calendar" aria-hidden="true"></i></h3>
                                    </div> -->


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
                    </section><!-- postArea -->
                    
                    
                    <section class="adArea">
                              <?php    
                              $args = array( 'post_type' => 'ads','orderby' =>  'rand', 
                                  'posts_per_page' => '1' );  
                              $loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post();?>        
                                <div class="ads" >        
                             
                                    <?php $key="external_link_key"; $single=1; $external_link = get_post_meta($post->ID, $key, $single); ?>  

<?php if($external_link == ""){ ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_post_thumbnail(); ?></a> <?php ;}
else{ ?>
	<a href="<?php echo $external_link; ?>" target="_blank" title="<?php the_title(); ?>"> <?php the_post_thumbnail(); ?></a> <?php } ?>     
                                </div>    
                             <?php endwhile; ?>
                        </section><!-- adArea --> 
                    
                    
                    <section class="postArea">
                                <?php
                               $args = array( 'posts_per_page' => 3, 'offset' => 6, 'category' => 8 );
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
                            
                                        

                                    <section class="postContent">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <h2><?php  echo the_title(); ?></h2>
                                            <p><?php $content = get_the_content();   $trimmed_content = wp_trim_words( $content, 20, '<a href="'. get_permalink() .'"><span> ...read more &#62;</span></a>' ); ?></p>
                                            <p><?php echo $trimmed_content; ?></p>
                                        </a>
                                    </section>        
                            </section>   
                            
                            <div class="rightSection"> 
                                    <!-- <div class="addCalendar" id="deskTopOnly">
                                        <h3>Add to calendar <i class="fa fa-calendar" aria-hidden="true"></i></h3>
                                    </div> -->


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
                    </section><!-- postArea -->
                    
                    
                    
                    
                    <section class="adArea">
                              <?php    
                              $args = array( 'post_type' => 'ads','orderby' =>  'rand', 
                                  'posts_per_page' => '1' );  
                              $loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post();?>        
                                <div class="ads" >        
                             
                                    <?php $key="external_link_key"; $single=1; $external_link = get_post_meta($post->ID, $key, $single); ?>  

<?php if($external_link == ""){ ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_post_thumbnail(); ?></a> <?php ;}
else{ ?>
	<a href="<?php echo $external_link; ?>" target="_blank" title="<?php the_title(); ?>"> <?php the_post_thumbnail(); ?></a> <?php } ?>     
                                </div>    
                             <?php endwhile; ?>
                        </section><!-- adArea --> 
                    
                    
                    <section class="postArea">
                                <?php
                               $args = array( 'posts_per_page' => 3, 'offset' => 9, 'category' => 8 );
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
                            
                                        

                                    <section class="postContent">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <h2><?php  echo the_title(); ?></h2>
                                            <p><?php $content = get_the_content();   $trimmed_content = wp_trim_words( $content, 20, '<a href="'. get_permalink() .'"><span> ...read more &#62;</span></a>' ); ?></p>
                                            <p><?php echo $trimmed_content; ?></p>
                                        </a>
                                    </section>        
                            </section>   
                            
                            <div class="rightSection"> 
                                    <!--<div class="addCalendar" id="deskTopOnly">
                                        <h3>Add to calendar <i class="fa fa-calendar" aria-hidden="true"></i></h3>
                                    </div> -->


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
                    </section><!-- postArea -->
                    
                    
		</section><!-- archiveSection -->
	</main>



<?php get_footer(); ?>
