<?php get_header(); ?>

<section class="area--head" style="background:url(<?php the_field('header_image'); ?>)no-repeat top center fixed;">
	<!-- to update css if no title - adjust padding -->
</section>

<section class="area--page">
	<div class="row">
		<div class="small-10 medium-7 large-7 small-centered columns" id="content" role="main">

			<div class="row">
					<div class="small-12 medium-12 large-12 columns">
						<?php get_template_part('bio'); ?>
					</div>

					<section class="unit--quote">
				     	<p class="quote-credit">Find <?php the_title(); ?> on LinkedIn.</p>
				     	<a href="<?php the_field('profile_linkedin'); ?>" title="<?php the_title(); ?> on LinkedIn"><img class="linkedin" src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin-21px.png" alt="LinkedIn - Logo"></a>
				    </section>
			</div><!-- end .row -->

		</div>
	</div><!-- end .row -->
</section>

<section class="area--contact">
	<?php get_template_part('contact'); ?>
</section>
		
<?php get_footer(); ?>