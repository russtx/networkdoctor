<?php
/*Template Name: Calendar Page */
get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="calendarSection" >
                    
                     <div class="postNewsLetter" id="deskTopOnly">
                            <div class="postNewsLetterBox">
                                <a href="http://eepurl.com/cfgz_Y" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i><h3>Notify me of latest events and news</h3>
                                    <span><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div><!-- postNewsLetter -->
                    
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
                        
                        <section class="calendarSocials" id="deskTopOnly">
                            <a href="#/"><i class="fa fa-facebook-square" aria-hidden="true" ></i></a>
                            <a href="#/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                            <a href="#/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </section>  
                    
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
                        
                        
                        
                        
                        
                         
                <div id="deskTopOnly">
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
                        
                </div><!-- DesktopOnly -->        
                        
                        
                        <div class="clearfix"></div>
                                
                        <section class="upcomingEvents" id="mobileOnly">
                              <?php
                                               $args = array('orderby' => 'rand', 'category_name' => 'upcoming-events', 'showposts' => 1);
                                               $lastposts = get_posts( $args );
                                               foreach ( $lastposts as $post ) :
                                                 setup_postdata( $post ); ?>
                                    
                                                <?php $classes = array(  'class1', ); ?>
                           
                            <section class="upcomingBox">
                                    <span><h2><?php echo get_post_meta($post->ID, 'date', true); ?></h2></span>

                                    <section class="leftImage"><?php the_post_thumbnail('full'); ?></section>

                                    <section class="rightEvents">

                                        <span class="postMeta">

                                            <p>Location&#58; &nbsp;<?php echo get_post_meta($post->ID, 'location', true); ?></p>         

                                            <p>Time&#58; &nbsp;<?php echo get_post_meta($post->ID, 'time', true); ?></p>

                                        </span>
                                        <span class="clearfix"></span>

                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">More Info &nbsp;<i class="fa fa-play" aria-hidden="true"></i></a>

                                    </section> <!-- rightEvents -->
                            </section><!-- upcomingBox -->   
                                
                             <?php endforeach;  wp_reset_postdata(); ?>
                        </section><!-- upComingEvents -->   
                        
                        
                        <section class="upcomingEvents2" id="deskTopOnly">
                              <?php
                                               $args = array('orderby' => 'rand', 'category_name' => 'upcoming-events', 'showposts' => 3);
                                               $lastposts = get_posts( $args );
                                               foreach ( $lastposts as $post ) :
                                                 setup_postdata( $post ); ?>
                                    
                                                <?php $classes = array(  'class1', ); ?>
                           
                            <section class="upcomingBox">
                                
                                         <span class="postMeta blueBox">
                                             
                                            <h2><?php echo get_post_meta($post->ID, 'date', true); ?></h2>
                                            <div class="whiteLine"></div>
                                            <p>Location&#58; &nbsp;<?php echo get_post_meta($post->ID, 'location', true); ?></p>         

                                            <p>Time&#58; &nbsp;<?php echo get_post_meta($post->ID, 'time', true); ?></p>

                                        </span>

                                    <section class="deskTopImage"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('full'); ?></a></section>

                                    
                            </section><!-- upcomingBox -->   
                                
                             <?php endforeach;  wp_reset_postdata(); ?>
                        </section><!-- upComingEvents --> 
                        <span class="clearfix"></span>        

		</section><!-- calendarSection -->
                
                
		<!-- /section -->
	</main>

<div class="clearfix"></div>

<?php get_footer(); ?>
