<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="row">
		<div class="col s8">
			<section>

				<h1><?php _e( 'Latest Stories', 'john-picks-material-theme' ); ?></h1>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</section>
		</div>
		<!-- /section -->

		<div class="col s4 card blog-sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
	</main>


<?php get_footer(); ?>
