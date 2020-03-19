<?php get_header(); ?>

<section class="area--head" style="background:url(<?php the_field('header_image'); ?>)top center fixed;">
	<!-- to update css if no title - adjust padding -->
</section>

<section class="area--template">
	<div class="row">
		<div class="small-12 medium-12 medium-centered large-12 columns">
			<section class="block--template">
				<h1><?php the_title(); ?></h1>
				<?php get_template_part('template'); ?>
			</section>
		</div>
	</div><!-- end .row -->
</section>
		
<?php get_footer(); ?>