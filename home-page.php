<?php
/*Template Name: Home Page */
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="homeSection">

                    
                        
                        <div class="newsLetter">
                            <a href="http://eepurl.com/cfgz_Y" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i><h3>Notify me of latest events and news</h3>
                                <span><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                            </a>
                        </div>              

                        <div class="clearfix"></div>
                        <div class="coreSlider">
                            <h3> Our Core Members</h3>
                            <?php echo do_shortcode('[print_continuous_slider_plus_lightbox id="1"]'); ?>
                        </div>      
                        
                         <div class="clearfix"></div>
                         
                         <!-- this is Mobile Content -->
		
                         <div id="accordion">
                                <h3>Network Organizations</h3>
                                <div class="networkLogos " >      
                                    
                                      
                                    <li><a href="#tab1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chc-logo.png" alt="chc" class="network-img" ></a></li>
                                    
                                    <li><a href="#tab2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-logo.jpg" alt="pro"  class="network-img"></a></li>
                                    
                                    <li><a href="#tab31"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/synapse-logo.png" alt="synapse"  class="network-img"></a></li>
                                    
                                    <li><a href="#tab4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/212-logo.png" alt="212" class="network-img" ></a></li> 
                                    
                                    
                                </div>
                         
                                <h3>View Calendar</h3>
                                
                                
                                    <div class="mobile-calendar nonMember" id="tab-outer" > 
                        <ul id="tab-wrapper">
                            <li><a href="#tab1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chc-logo.png" alt="chc" class="calendar-img trigger " ></a></li>

                            <li><a href="#tab2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-logo.png" alt="pro"  class="calendar-img trigger" ></a></li>

                            <li><a href="#tab3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/synapse-logo.png" alt="synapse"  class="calendar-img trigger" ></a></li>

                            <li><a href="#tab4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/212-logo.png" alt="212" class="calendar-img trigger" ></a></li>
                        </ul> 
                        
                        
                                        <span>click on Icon to view calendar</span>
                        <section class="nonMember" id="thatdivid"><p>You must be logged in to view the calendar.</p><?php echo dynamic_sidebar( 'header-area' ); ?> </section>
                        <section id="tab-body">
                          <section id="tab1">
                              <span>Chamber of Commerce Calendar <br />&nbsp;<br />Coming Soon!</span>
                                <iframe id="thisdivid" src="https://calendar.google.com/calendar/embed?mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23ff0000&amp;src=toplinemediateam.com_mnfvjqu191mnqn222ob1gn8bg0%40group.calendar.google.com&amp;color=%23A32929&amp;ctz=America%2FNew_York" style="border:solid 1px #777" 
                                   width="800" height="600" frameborder="0" scrolling="no"></iframe>
                              
                            </section>

                            <section id="tab2">
                                
                                     <iframe id="thisdivid" src="https://calendar.google.com/calendar/embed?title=PRO%20Richmond&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23ff0000&amp;src=evdqcpjjs889nacqkof99drkdg%40group.calendar.google.com&amp;color=%23B1365F&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                            </section>
                            <section id="tab3">
                                      <iframe id="thisdivid" src="https://calendar.google.com/calendar/embed?title=Synapse%20by%20Invite%20Only%20&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%233366ff&amp;src=thenetworkdoctorrva.com_1nfnfupkbbadu2bhob3vgb8lbo%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

                            </section>
                            <section id="tab4">
                                      <iframe id="thisdivid" src="https://calendar.google.com/calendar/embed?title=Two-Twelve&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%2333ccff&amp;src=thenetworkdoctorrva.com_3q97f0pakm87p9gct5a8vob8r8%40group.calendar.google.com&amp;color=%238D6F47&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

                            </section>  
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
                                                    
                                                        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank"><i class="fa fa-facebook-square" aria-hidden="true" ></i></a>
                                                        <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                                        <a href="https://plus.google.com/share?url=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                        <a href="#" ><i class="fa fa-google" aria-hidden="true"></i></a>
                                                    
                                                </div>
                                            </section><!-- postBoxes -->
                                            
                                            
                                           
                                                    <?php endforeach; 
                                                    wp_reset_postdata(); ?>

                                        </article>
                                    </section>                
                                </div>
                                   
       

                    
   
                </div><!-- accordion -->

                <!-- Mbbile Break this is where Desktop starts -->

                <div class="deskTopContainer" >
                    
                    <div class="slideDown" >
                        
                      <div id="tab-outer2">
                        
                        <ul id="tab-wrapper2">
                            <li><a href="#tab5"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chc-logo-200.jpg" alt="chc" class="calendar-img trigger " ></a></li>

                            <li><a href="#tab6"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-logo-200.jpg" alt="pro"  class="calendar-img trigger" ></a></li>

                            <li><a href="#tab7"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/synapse-logo-200.jpg" alt="synapse"  class="calendar-img trigger" ></a></li>

                            <li><a href="#tab8"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/212-logo-200.jpg" alt="212" class="calendar-img trigger" ></a></li>
                          
                            
                        </ul>    
                                  
                            <div class="clearfix"></div>
                        
                        
                        <span>click on Icon to view calendar</span>
                        
                        
                        <div class="nonMember" id="thatdivid"><p>You must be logged in to veiw the calendar.</p><?php echo dynamic_sidebar( 'header-area' ); ?> </div>
                        
                        <section id="tab-body2">
                            <section id="tab5">
                                    <span>Chamber of Commerce Calendar <br />&nbsp;<br />Coming Soon!</span>
                                    <iframe id="thisdivid" src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=toplinemediateam.com_mnfvjqu191mnqn222ob1gn8bg0%40group.calendar.google.com&amp;color=%238D6F47&amp;ctz=America%2FNew_York"
                                            style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                            </section>

                            <section id="tab6">
                                     <iframe id="thisdivid" src="https://calendar.google.com/calendar/embed?title=PRO%20Richmond&amp;height=600&amp;wkst=1&amp;bgcolor=%23ff0000&amp;src=evdqcpjjs889nacqkof99drkdg%40group.calendar.google.com&amp;color=%23B1365F&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                            </section>
                            <section id="tab7">
                                     <iframe id="thisdivid" src="https://calendar.google.com/calendar/embed?title=Synapse%20by%20Invite%20Only%20&amp;height=600&amp;wkst=1&amp;bgcolor=%233366ff&amp;src=thenetworkdoctorrva.com_1nfnfupkbbadu2bhob3vgb8lbo%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                            </section>
                            <section id="tab8">
                                     <iframe id="thisdivid" src="https://calendar.google.com/calendar/embed?title=Two-Twelve&amp;height=600&amp;wkst=1&amp;bgcolor=%2333ccff&amp;src=thenetworkdoctorrva.com_3q97f0pakm87p9gct5a8vob8r8%40group.calendar.google.com&amp;color=%238D6F47&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                            </section> 
                        </section><!-- tab-body -->   
                        
                      </div><!-- tab-outer2 -->
                    </div><!-- slideDown -->
                    
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
                            <a href="http://eepurl.com/cfgz_Y" target="_blank"><span>
                               <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </span>
                            <h3>
                                Notify me or<br />
                                latest events<br />
                                and news<i class="fa fa-caret-right" aria-hidden="true"></i>
                            </h3></a>
                        </div>
                    </div><!-- leftSide -->
                    <div class="rightSide">
                        <div class="networkOrgs">
                            <span><h3>View Upcoming Networking Events</h3></span>
                            <!--<div class="OrgImg"><a href="<?php echo get_site_url(); ?>/chesterfield-chamber-of-commerce/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chc-logo-200.jpg" alt="chc" ></a></div>
                            <div class="OrgImg"><a href="<?php echo get_site_url(); ?>/get_site_url"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-logo-200.jpg" alt="pro" ></a></div>
                            <div class="OrgImg"><a href="<?php echo get_site_url(); ?>/synaspe/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/synapse-logo-200.jpg" alt="synopse" ></a></div>
                            <div class="OrgImg"><a href="<?php echo get_site_url(); ?>"/212-2/><img src="<?php echo get_template_directory_uri(); ?>/assets/images/212-logo-200.jpg" alt="212" ></a></div>-->
                            <a href="<?php echo get_site_url(); ?>/calendar"><?php echo get_site_url(); ?>"/212-2/><img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar.jpg" alt="calendar" ></a>
                        
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
                                    
                                    <div class="whiteLine"></div>
                                    <p><?php $content = get_the_content();   $trimmed_content = wp_trim_words( $content, 15, '<a href="'. get_permalink() .'"> ...<span>read more<i class="fa fa-caret-right" aria-hidden="true"></i></span></a>' ); ?></p>
                                    <p><?php echo $trimmed_content; ?></p>
                                </a>
                            </div><!-- blueBox -->    

                            
                           <div class="postPix">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                     <?php the_post_thumbnail('full'); ?>
                                </a>
                           </div>
                            

                        </div><!-- recentPost -->
                                 <?php endforeach; 
                                 wp_reset_postdata(); ?>

                                       
                    </div><!-- desktopRecentNews -->
                    
                    
                </div><!-- deskTopContainer -->


                <!-- this shows on both mobile and desktop -->
                        <div class="clearfix"></div>
                        
                        <div class="comingSoonWrapper">
                            <div class="comingSoon">
                                <h3>Coming Soon! Online Shop</h3>
                            </div>
                        </div>

		</section><!-- homeSection -->
	</main>



<?php get_footer(); ?>