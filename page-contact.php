<?php
/*
Template Name: Page - Contact
*/
get_header('map'); ?>

<section class="area--head" style="background:url(<?php the_field('header_image'); ?>)no-repeat top center;background-size: cover;">
	<!-- to update css if no title - adjust padding -->
</section>

<?php /*
<section class="area--map">
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<h1>Find us</h1>
			<div id="map-canvas"></div>
		</div>
	</div><!-- end .row -->
</section>
*/ ?>

<section class="area--cta">
	<div class="row">
		<div class="small-12 medium-11 medium-centered large-10 columns">
			<div class="row">
				<div class="small-12 medium-12 large-12 columns">
				<h3 class="subheading">Work With Us</h3>
					<?php get_template_part('cta-resource'); ?>
				</div>
			</div><!-- end .row -->
		</div>
	</div><!-- end .row -->
</section>

<script>
	jQuery('li.blue').wrapInner('<span class="li_content" />');
</script>

<?php get_footer(); ?>