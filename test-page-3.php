<?php
/*Template Name: Test Page 3 */
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="homeSection">

                    <h1><?php the_title(); ?></h1>
                        
                        <div class="newsLetter">
                            <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i><h3>Notify me of latest events and news</h3>
                                <span><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                            </a>
                        </div>              

                        <div class="clearfix"></div>
                        <div class="coreSlider">
                            <h3>Core Members</h3>
                            <?php echo do_shortcode('[print_continuous_slider_plus_lightbox]'); ?>
                        </div>      
                        
                         <div class="clearfix"></div>
                         
                         <!-- this is Mobile Content -->
		
                         <div id="accordion">
                                <h3>Network Organizations</h3>
                                <div class="networkLogos">      
                                    
                                      
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chc-logo.png" alt="chc" class="network-img" >
                                    
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-logo.jpg" alt="pro"  class="network-img">
                                    
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/synapse-logo.png" alt="synapse"  class="network-img">
                                    
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/212-logo.png" alt="212" class="network-img" >
                                </div>
                         
                                <h3>View Calendar</h3>
                                
                                
                                           
                                
                    <div class="mobile-calendar" > 
                        <span>
                            <a href="#box1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chc-logo.png" alt="chc" class="calendar-img trigger " ></a>

                            <a href="#box2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-logo.png" alt="pro"  class="calendar-img trigger" ></a>

                            <a href="#box3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/synapse-logo.png" alt="synapse"  class="calendar-img trigger" ></a>

                            <a href="#box4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/212-logo.png" alt="212" class="calendar-img trigger" ></a>
                        </span>  
                        
                        <section class="calendarFiller" id="thisdivid"><p> Click on Icon to view their Calendar</p></section>
                        
                        <section class="nonMember" id="thatdivid"><p>You must be logged in to veiw the calendar.</p> </section>
                        
                            <section class ="toggle " id="box1">
                                <iframe src="https://calendar.google.com/calendar/embed?mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23ff0000&amp;src=toplinemediateam.com_mnfvjqu191mnqn222ob1gn8bg0%40group.calendar.google.com&amp;color=%23A32929&amp;ctz=America%2FNew_York" style="border:solid 1px #777" 
                                   width="800" height="600" frameborder="0" scrolling="no"></iframe>
                            </section>

                            <section class ="toggle" id="box2">
                                     <iframe src="https://calendar.google.com/calendar/embed?mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23ff0000&amp;src=toplinemediateam.com_mnfvjqu191mnqn222ob1gn8bg0%40group.calendar.google.com&amp;color=%23A32929&amp;ctz=America%2FNew_York" style="border:solid 1px #777" 
                                        width="800" height="600" frameborder="0" scrolling="no"></iframe>
                            </section>
                            <section class ="toggle" id="box3">
                                     <iframe src="https://calendar.google.com/calendar/embed?mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23ff0000&amp;src=toplinemediateam.com_mnfvjqu191mnqn222ob1gn8bg0%40group.calendar.google.com&amp;color=%23A32929&amp;ctz=America%2FNew_York" style="border:solid 1px #777" 
                                        width="800" height="600" frameborder="0" scrolling="no"></iframe>
                            </section>
                            <section class ="toggle" id="box4">
                                     <iframe src="https://calendar.google.com/calendar/embed?mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23ff0000&amp;src=toplinemediateam.com_mnfvjqu191mnqn222ob1gn8bg0%40group.calendar.google.com&amp;color=%23A32929&amp;ctz=America%2FNew_York" style="border:solid 1px #777" 
                                        width="800" height="600" frameborder="0" scrolling="no"></iframe>
                            </section>  
                                                      
                    </div> <!-- mobile-calendar -->  
                                
                                <h3>Recent News</h3>
                                    
                                <div class="postArea">
                                                <?php
                                               $args = array( 'posts_per_page' => 2, 'category' => 4 );
                                               $lastposts = get_posts( $args );
                                               foreach ( $lastposts as $post ) :
                                                 setup_postdata( $post ); ?>
                                    
                                                <?php
                                                        $classes = array(
                                                                'class1',
                                                                

                                                        );
                                                ?>

                                    <section id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>        

                                        <article class="thePost">  
                                            
                                              

                                            <section class="postImage">
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                    <?php the_post_thumbnail('full'); ?>
                                                </a>
                                            </section>


                                            <section class="postContent">
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                    <h2><?php  echo the_title(); ?></h2>
                                                    <p><?php $content = get_the_content();   $trimmed_content = wp_trim_words( $content, 20, '<a href="'. get_permalink() .'"><span> ...read more &#62;</span></a>' ); ?></p>
                                                    <p><?php echo $trimmed_content; ?></p>
                                                </a>
                                            </section>        

                                            <section class="postBoxes">
                                                <a href="#!" ><button><p>Read<br />Later</p></button></a>
                                                <a href="#!" ><button class="socialButton" id="button"><p>Share<br />Icon</p></button></a>
                                               
                                                
                                                <div id="hidden2" class="hiddenButton">
                                                    
                                                        <a href="#/"><i class="fa fa-facebook-square" aria-hidden="true" ></i></a>
                                                        <a href="#/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                                        <a href="#/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                    
                                                </div>
                                            </section><!-- postBoxes -->
                                            
                                            
                                           
                                                    <?php endforeach; 
                                                    wp_reset_postdata(); ?>

                                        </article>
                                    </section>                
                                </div>
                                   
       

                    
   
                </div><!-- accordion -->

                <!-- Mbbile Break this is where Desktop starts -->

                <div class="deskTopContainer">
                    <div class="slideDown">What a deal!</div>
                    <div class="leftSide">
                        <div class="deskTopCalendar">
                            <span>
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                            <h3 class="grabPromo">
                                See what's<br />
                                coming up <i class="fa fa-caret-right" aria-hidden="true"></i>
                            </h3>
                        </div><!-- deskTopCalendar -->    
                            
                        
                            
                        <div class="desktopNewsLetter">
                            <span>
                               <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </span>
                            <h3>
                                Notify me or<br />
                                latest events<br />
                                and news<i class="fa fa-caret-right" aria-hidden="true"></i>
                            </h3>
                        </div>
                    </div><!-- leftSide -->
                    <div class="rightSide">
                        <div class="networkOrgs">
                            <span><h3>Our Network Organizations</h3></span>
                            <div class="OrgImg"><a href='#'><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chc-logo-200.jpg" alt="chc" ></a></div>
                            <div class="OrgImg"><a href='#'><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-logo-200.jpg" alt="pro" ></a></div>
                            <div class="OrgImg"><a href='#'><img src="<?php echo get_template_directory_uri(); ?>/assets/images/synapse-logo-200.jpg" alt="synopse" ></a></div>
                            <div class="OrgImg"><a href='#'><img src="<?php echo get_template_directory_uri(); ?>/assets/images/212-logo-200.jpg" alt="212" ></a></div>
                        </div>
                    </div><!-- rightSide -->
                    
                    <div class="desktopRecentNews">
                         <?php
                            $args = array( 'posts_per_page' => 3, 'category' => 4 );
                            $lastposts = get_posts( $args );
                            foreach ( $lastposts as $post ) :
                              setup_postdata( $post ); ?>

                        <div class="recentPost">
                            <div class="blueBox">
                        
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <h2><?php  echo the_title(); ?></h2>
                                    <h3> <?php the_author_posts_link(); ?></h3>
                                    <div class="whiteLine"></div>
                                    <p><?php $content = get_the_content();   $trimmed_content = wp_trim_words( $content, 15, '<a href="'. get_permalink() .'"> ...<span>read more<i class="fa fa-caret-right" aria-hidden="true"></i></span></a>' ); ?></p>
                                    <p><?php echo $trimmed_content; ?></p>
                                </a>
                            </div><!-- blueBox -->    

                             <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                 <?php the_post_thumbnail('full'); ?>
                             </a>

                        </div><!-- recentPost -->
                                 <?php endforeach; 
                                 wp_reset_postdata(); ?>

                                       
                    </div><!-- desktopRecentNews -->
                    
                    
                </div><!-- deskTopContainer -->


                <!-- this shows on both mobile and desktop -->
                        <div class="clearfix"></div>
                        
                        <div class="comingSoon">
                            <h3>Coming Soon! Online Shop</h3>
                        </div>

		</section><!-- homeSection -->
	</main>



<?php get_footer(); ?>