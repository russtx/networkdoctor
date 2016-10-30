<?php /* Template Name: Demo Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div id="accordion">
    <a class="Active" href="#one" class="first">Recent Posts</a>
    <div id="one">
        this is some info.
    </div>
    
    <a class="NoneActive" href="#two">Popular Posts</a>
    <div id="two">
        this is some more info.
    </div>
    
    <a class="NoneActive" href="#three">Archived Posts</a>
    <div id="three">
        this is even more info.
    </div>
</div>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
