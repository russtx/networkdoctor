<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('thePost'); ?>>

                <!-- post title -->
		<span class="redTop">
                    <h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h2>
                </span>
		<!-- /post title -->
            
            
		<section class="postImage">
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
		<?php endif; ?>
                </section>

		
            <section class="postContent">        
		<!-- post details -->
		<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		
		
		<!-- /post details -->

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

                <div class="eventSocials" >
                    <h3>Share This </h3>
                        <span>
                            <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank"><i class="fa fa-facebook-square" aria-hidden="true" ></i></a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                            <a href="https://plus.google.com/share?url=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </span>
                    </div>
                
                
		<?php edit_post_link(); ?>
            </section>    
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
