<?php
/*
Template Name: Page - Home (New)
*/
get_header(); ?>

<?php /*
<section class="area--head" style="background:url(<?php the_field('header_image'); ?>)no-repeat top center;background-size: cover;">
	<!-- to update css if no title - adjust padding -->
</section>
*/ ?>

<!-- Introduction block - 4 icons -->
<section class="home--block-blue">
	<section class="home--bg-pattern">
		
		<div class="row">
			<div class="small-12 medium-10 medium-centered large-12 columns">
				<div class="row">
					<div class="small-6 medium-3 large-3 columns">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/10x-icon-comp.png">
					</div>
					<div class="small-6 medium-3 large-3 columns">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/10x-icon-cols.png">
					</div>
					<div class="small-6 medium-3 large-3 columns">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/10x-icon-flow.png">
					</div>
					<div class="small-6 medium-3 large-3 columns">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/10x-icon-graph.png">
					</div>
				</div><!-- end .row -->
			</div>
		</div><!-- end .row -->

	</section>
</section>

<!-- Flexible Content #1 - Homepage Block -->
<?php while(has_sub_field("homepage_block")): ?>

	<!-- If 'hp_colour' is: blue -->
	<?php if(get_sub_field ('hp_colour') == 'blue'): ?>
		<section class="home--block-blue">
			<section class="home--bg-pattern">
				<?php get_template_part('homepage-builder'); ?>
			</section>
		</section>
	<?php endif; ?>

	<!-- If 'hp_colour' is: white -->
	<?php if(get_sub_field ('hp_colour') == 'white'): ?>
		<section class="home--block-white">
			<section class="home--bg-pattern">
				<?php get_template_part('homepage-builder'); ?>
			</section>
		</section>
	<?php endif; ?>

<?php endwhile; ?>

<!-- Conclusion block - Contact details -->
<section class="home--block-white bl-contact">
	<section class="home--bg-pattern">

		<div class="row">
			<div class="small-12 medium-10 medium-centered large-10 columns">
				<h2 class="home--t-title">Contact us</h2>
				<hr class="bar">
				<div class="row">
					<div class="small-12 medium-8 large-8 columns">
						<p><strong>10x Consulting Ltd</strong><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>Regus House<span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>Herons Way<br>
						Chester Business Park<span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>Chester<span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>CH4 9QR</p>
						<p><span style="font-weight:900;">e.</span>&nbsp;&nbsp;<a href="mailto:enquiries@10xconsulting.co.uk" title="Email 10x Consulting">enquiries@10xconsulting.co.uk</a><br>
						<span style="font-weight:900;">w.</span>&nbsp;&nbsp;www.10xconsulting.co.uk</p>
						<p><span style="font-weight:900;">li.</span>&nbsp;&nbsp;<a href="https://www.linkedin.com/company/10x-consulting-ltd/" target="_blank" title="10x Consulting Ltd on LinkedIn">10x Consulting Ltd</a></p>
					</div>
					<div class="small-12 medium-4 large-4 columns">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/10x-icon-print.png">
					</div>
				</div><!-- end .row -->
			</div>
		</div><!-- end .row -->

	</section>
</section>

<?php get_footer(); ?>