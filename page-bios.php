<?php
/*
Template Name: Page - Bios
*/
get_header(); ?>

<section class="area--head" style="background:url(<?php the_field('header_image'); ?>)no-repeat top center;background-size: cover;">
	<!-- to update css if no title - adjust padding -->
</section>

<section class="area--page">
	<div class="row">
		<div class="small-12 medium-12 large-10 small-centered columns" id="content" role="main">

			<div class="row"> 
				<?php
					$args = array(
						'post_type' => 'bio',
						'orderby' => 'menu_order', 
		    			'order' => 'ASC',
						'post_status' => 'publish',
						);
					$related = new WP_Query( $args );
					if( $related->have_posts() ): while( $related->have_posts() ): $related->the_post();
					?>
					<div class="small-12 medium-6 large-6 columns">
						<?php get_template_part('bio'); ?>
					</div>

					<section class="show-for-small-only unit--quote">
				     	<p class="quote-credit">Find <?php the_title(); ?> on LinkedIn.</p>
				     	<a href="<?php the_field('profile_linkedin'); ?>" title="<?php the_title(); ?> on LinkedIn"><img class="linkedin" src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin-21px.png" alt="LinkedIn - Logo"></a>
				    </section>
				<?php endwhile; endif; ?>
			</div><!-- end .row -->

			<div class="row">
				<?php
					$args = array(
						'post_type' => 'bio',
						'orderby' => 'menu_order', 
		    			'order' => 'ASC',
						'post_status' => 'publish',
						);
					$related = new WP_Query( $args );
					if( $related->have_posts() ): while( $related->have_posts() ): $related->the_post();
					?>
					<div class="show-for-medium-up small-12 medium-6 large-6 columns">
						<section class="unit--quote">
					     	<p class="quote-credit">Find <?php the_title(); ?> on LinkedIn.</p>
					     	<a href="<?php the_field('profile_linkedin'); ?>" title="<?php the_title(); ?> on LinkedIn"><img class="linkedin" src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin-21px.png" alt="LinkedIn - Logo"></a>
					    </section>
					</div>
					<?php endwhile; endif; ?>
			</div><!-- end .row -->

		</div>
	</div><!-- end .row -->
</section>
		
<?php get_footer(); ?>