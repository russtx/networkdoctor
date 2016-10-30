<?php
/* Template Name: Contact Page */

get_header(); ?>
<div class="clearfix"></div>
	<main role="main">
		<!-- section -->
                <div class="postNewsLetter">
                <div class="postNewsLetterBox">
                    <a href="http://eepurl.com/cfgz_Y" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i><h3>Notify me of latest events and news</h3>
                        <span><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                    </a>
                </div>
            </div>
                
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
	<a href="<?php echo $external_link; ?> target=_blank" title="<?php the_title(); ?>"> <?php the_post_thumbnail(); ?></a> <?php } ?>
                                </div>    
                             <?php endwhile; ?>
                
                
                        </section><!-- adArea --> 
            
            <div class="clearfix"></div>
                <section class="defaultSection">

			
                    <?php echo do_shortcode('[gravityform id="1" title="true" description="true"]'); ?>
		

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

