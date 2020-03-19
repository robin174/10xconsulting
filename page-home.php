<?php
/*
Template Name: Page - Home
*/
get_header(); ?>

<section class="area--head" style="background:url(<?php the_field('header_image'); ?>)no-repeat top center;background-size: cover;">
	<!-- to update css if no title - adjust padding -->
</section>

<section class="area--page-home">
	<section class="block--logo">
		<div class="row">
			<div class="small-12 medium-11 medium-centered large-10 columns">

				<div class="row">
					<div class="small-12 hide-for-small medium-3 large-3 columns">
						<figure class="logo-home">
							<?php get_template_part('logo'); ?>
						</figure>
					</div>
					<div class="small-12 medium-9 large-9 columns">
						<?php /*
						<section>
							<h1>Welcome</h1>
							<p class="intro">10x Consulting is a professional services company specialising in business and IT programme delivery within the Financial Services and Payments sector.</p>
							<p>We created 10x Consulting in order to offer a highly specialist Risk and Fraud consulting service that traditional contingent market and larger consulting practices often fail to deliver. Our collective experience and strong professional network allows us to deploy subject matter experts quickly with a level of backing and support consistent with our core values.</p>
						</section>
						<section>
							<hr>
						</section>
						<section>
							<p>10x Consulting are always looking for fresh new projects. We are a professional services company specialising in business and IT programme delivery within the Financial Services and Payments sector.</p>
							<p><strong>If you're interested in working with us, please contact us:<br> <a href="mailto:enquiries@10xconsulting.co.uk?subject=Work with 10x Consulting" title="Email 10x Consulting">enquiries@10xconsulting.co.uk</a>&nbsp;|&nbsp;<a href="https://www.linkedin.com/company/5096278" title="10 Consulting on LinkedIn">LinkedIn</a></strong></p>
						</section>
						*/ ?>

						<?php get_template_part('template'); ?>
					</div>

					<div>
						
					</div>
				</div><!-- end .row -->

			</div>
		</div><!-- end .row -->
	</section>
</section>

<?php get_footer(); ?>