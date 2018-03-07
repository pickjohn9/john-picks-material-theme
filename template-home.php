<?php /* Template Name: Home Page w/ Slideshow Template */ get_header(); ?>


	<!-- SLIDESHOW SECTION -->
   
    <?php $mypost = array( 'post_type' => 'slideshow', ); ?>
    <?php $loop = new WP_Query( $mypost ); ?>

  <div class="carousel carousel-slider center" data-indicators="true">
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
      	
                <div  id="post-<?php the_ID(); ?>" class="carousel-item center white-text">
                	<div class="slide-content" style="    position: absolute; margin: 10% auto; width: 100%;">
	                	<h1 class="slide-title"><?php the_title(); ?></h1>
		            	<p class="slide-caption"><?php the_content(); ?></p>
	            	</div>
                	<?php the_post_thumbnail() ?>
             	</div>
	 
    <?php endwhile; ?>
</div>

<?php wp_reset_query(); ?>
	      


	<main role="main">
		<!-- section -->
		<section>


			<div class="section">

			<!-- 3 Column Widgets -->
		      <div class="row">
		        <div class="col s12 m4 center">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home Widget 1") ) : ?>
					<?php endif;?>
		          </div>


		        <div class="col s12 m4 center">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home Widget 2") ) : ?>
					<?php endif;?>
		        </div>

		        <div class="col s12 m4 center">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home Widget 3") ) : ?>
					<?php endif;?>					
		        </div>
		      </div>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<?php the_content(); ?>

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
	</main>


<?php get_footer(); ?>
