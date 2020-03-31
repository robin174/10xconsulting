<?php
/*
Template Name: Page - Contact
*/
get_header(); ?>

<section class="area--head" style="background:url(<?php the_field('header_image'); ?>)no-repeat top center;background-size: cover;">
	<!-- to update css if no title - adjust padding -->
</section>

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

							<h3 class="subheading">Work With Us</h3>
							<p>10x Consulting are always looking for Risk and Fraud professionals to help us grow. We require at least 10 years’ experience in the retail banking and payments sector and often have roles in the following disciplines - portfolio management, systems development, data management, change management and project / programme delivery.</p>
							
							<p><strong>If you’re interested please send us your CV to: <a href="mailto:careers@10xconsulting.co.uk?subject=Work with 10x Consulting" title="Email 10x Consulting">careers@10xconsulting.co.uk</a></strong></p>

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