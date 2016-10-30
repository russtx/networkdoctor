<?php get_header(); ?>

	<main role="main">
            <div class="postNewsLetter">
                <div class="postNewsLetterBox">
                    <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i><h3>Notify me of latest events and news</h3>
                        <span><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                    </a>
                </div>
            </div>
            
             <div class="adAreaTop">
                
                              <?php    
                              $args = array( 'post_type' => 'ads','orderby' => 'rand', 
                                  'posts_per_page' => '1' );  
                              $loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post();?>        
                                <div class="ads" >        
                             
                                    <?php $key="external_link_key"; $single=1; $external_link = get_post_meta($post->ID, $key, $single); ?>  

<?php if($external_link == ""){ ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_post_thumbnail(); ?></a> <?php ;}
else{ ?>
	<a href="<?php echo $external_link; ?>" title="<?php the_title(); ?>"> <?php the_post_thumbnail(); ?></a> <?php } ?>   
                                </div>    
                             <?php endwhile; ?>
                        
            </div><!-- adAreaTop -->
            
            <div class="clearfix"></div>
	
            
        <section class="defaultSection">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('recentNews'); ?>>

                       
                    <div class="postSocials" id="mobileOnly">
                        <p>Share this</p>
                        <span>
                            <a href="#/"><i class="fa fa-facebook-square" aria-hidden="true" ></i></a>
                            <a href="#/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                            <a href="#/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </span>
                    </div>
                    
                    <!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->
                        
                        
                        <span class="date"><?php the_time('F j, Y'); ?> </span>
                        
                        <div class="singlePost">
                    
			

		
			<?php
                            // original content display
                                 the_content();
                            // split content into array
                               // $content = split_content();
                            // output first content section in column1
                               // echo '<div id="column1">', array_shift($content), '</div>';
                            // output remaining content sections in column2
                               // echo '<div id="column2">', implode($content), '</div>';
                        ?>

                        </div><!-- test -->
			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			

			

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
                
                <div class="postSocialsBottom" id="deskTopOnly">
                        <p>Share this</p>
                        <span>
                            <a href="#/"><i class="fa fa-facebook-square" aria-hidden="true" ></i></a>
                            <a href="#/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                            <a href="#/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </span>
                    </div>
                <div class="clearfix"></div>
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
	<a href="<?php echo $external_link; ?>" title="<?php the_title(); ?>"> <?php the_post_thumbnail(); ?></a> <?php } ?>   
                                </div>    
                             <?php endwhile; ?>
                        </section><!-- adArea --> 

	</section>
	<!-- /section -->
	</main>



<?php get_footer(); ?>
