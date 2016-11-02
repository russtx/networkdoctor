<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="catSection">
                    

			 <div class="searchBar" id="mobileOnly">
                             <?php get_search_form(); ?>
                        </div>
                    
                        <div class="clearfix"></div>
                        <div class="topPageSocials" id="mobileOnly">
                                                    
                            <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank"><i class="fa fa-facebook-square" aria-hidden="true" ></i></a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                            <a href="https://plus.google.com/share?url=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>

                         </div>
                    
                        <div class="clearfix"></div>
                        
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
	<a href="<?php echo $external_link; ?>" title="<?php the_title(); ?>"> <?php the_post_thumbnail(); ?></a> <?php } ?>
                                </div>    
                             <?php endwhile; ?>
                        </section><!-- adArea --> 
            
            <div class="clearfix"></div>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
            
             <section class="adArea">
                            <?php    
                              $args = array( 'post_type' => 'ads','orderby' =>  'rand', 
                                  'posts_per_page' => '1' );  
                              $loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post();?>        
                                <div class="ads" >        
                             
                                    <?php $key="external_link_key"; $single=1; $external_link = get_post_meta($post->ID, $key, $single); ?>  

<?php if($external_link == ""){ ?>
	<a href="<?php the_permalink(); ?>  " title="<?php the_title(); ?>" > <?php the_post_thumbnail(); ?></a> <?php ;}
else{ ?>
	<a href="<?php echo $external_link; ?>" title="<?php the_title(); ?>"> <?php the_post_thumbnail(); ?></a> <?php } ?>
                                </div>    
                             <?php endwhile; ?>
                        </section><!-- adArea --> 

		</section>
		<!-- /section -->
	</main>




<?php get_footer(); ?>
