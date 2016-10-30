<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
                    
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

			<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
