	<?php /* Template Name: Page with Right Sidebar*/  ?>
<?php get_header(); ?>



	<main role="main">
		<!-- section -->
		
		<div  id="page-content" class="row">
			<div class="card col s8">
			<section>

				<h1 class="page-title"><?php the_title(); ?></h1>



			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_content(); ?>

					<?php comments_template( '', true ); // Remove if you don't want comments ?>

					<br class="clear">

					<?php edit_post_link(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'john-picks-material-theme' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</section>
			<!-- /section -->
		</div>
		<div class="col s4 card">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Interior Page Sidebar") ) : ?>
		<?php endif;?>		</div>
	</div>
	</main>


<?php get_footer(); ?>
