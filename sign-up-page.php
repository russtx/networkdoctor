<?php
/*Template Name: Sign Up Page */
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="signUpSection">
                    <a href="<?php echo home_url(); ?>"><button class="xButton">X</button></a>       
                    <?php echo do_shortcode('[gravityform id="3" title="true" description="true"]'); ?>
                    
			
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>