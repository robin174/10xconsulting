<?php
/*
Template Name: Page - Home (New)
*/
get_header(); ?>

<section class="area--head" style="background:url(<?php the_field('header_image'); ?>)no-repeat top center;background-size: cover;">
	<!-- to update css if no title - adjust padding -->
</section>


<!-- have the ability to add the below via the admin -->
<section class="area--new-x" style="background-color:#40C8F4;padding-top:50px;padding-bottom:50px">
	<div class="row">
		<div class="small-12 medium-12 medium-centered large-12 columns">
			<div class="row">
				<div class="small-12 medium-6 large-6 columns">
					<p>New content here - left</p>
				</div>
				<div class="small-12 medium-6 large-6 columns">
					<p>New content here - right</p>
				</div>
			</div><!-- end .row -->
		</div>
	</div><!-- end .row -->
</section>
<section class="area--new-x" style="background-color:white;padding-top:50px;padding-bottom:50px">
	<div class="row">
		<div class="small-12 medium-12 medium-centered large-12 columns">
			<div class="row">
				<div class="small-12 medium-6 large-6 columns">
					<p>New content here - left</p>
				</div>
				<div class="small-12 medium-6 large-6 columns">
					<p>New content here - right</p>
				</div>
			</div><!-- end .row -->
		</div>
	</div><!-- end .row -->
</section>
<section class="area--new-x" style="background-color:#40C8F4;padding-top:50px;padding-bottom:50px">
	<div class="row">
		<div class="small-12 medium-12 medium-centered large-12 columns">
			<div class="row">
				<div class="small-12 medium-6 large-6 columns">
					<p>New content here - left</p>
				</div>
				<div class="small-12 medium-6 large-6 columns">
					<p>New content here - right</p>
				</div>
			</div><!-- end .row -->
		</div>
	</div><!-- end .row -->
</section>

<!-- To delete below this line -->
<section class="area--page-home">
	<section class="block--logo">
		<div class="row">
			<div class="small-12 medium-12 medium-centered large-12 columns">

				<div class="row">
					<div class="small-12 hide-for-small medium-3 large-3 columns">
						<figure class="logo-home">
							<?php get_template_part('logo'); ?>
						</figure>
					</div>
					<div class="small-12 medium-9 large-9 columns">
						<section class="block--template">
					
							<?php get_template_part('template'); ?>
							
						</section>
					</div>

					<div>
						
					</div>
				</div><!-- end .row -->

			</div>
		</div><!-- end .row -->
	</section>
</section>

<?php get_footer(); ?>