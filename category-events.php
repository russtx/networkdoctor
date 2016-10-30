<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="catSection">
                    <div class="searchBar" id="mobileOnly">
                        <?php get_search_form(); ?>
                    </div>

			

			<?php get_template_part('loop-events'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>




<?php get_footer(); ?>
