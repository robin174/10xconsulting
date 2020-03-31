<?php
/*
Template Name: Page - Home
*/
get_header(); ?>

<section class="area--head" style="background:url('http://10x-consulting.local/wp-content/uploads/2020/03/10x_000078464449.jpg')no-repeat top center;background-size: cover;">
	<!-- to update css if no title - adjust padding -->
</section>

<section class="area--page-home">
	<section class="block--logo">
		<div class="row">
			<div class="small-12 medium-11 medium-centered large-10 columns" style="padding-top:100px;padding-bottom:50px;">

				<div class="row">
					<div class="small-12 hide-for-small medium-3 large-3 columns">
						<figure class="logo-home">
							<?php get_template_part('logo'); ?>
						</figure>
					</div>
					<div class="small-12 medium-9 large-9 columns">
						<section class="block--template">

							<section>
								<h1>404 - File not found.</h1>
								<p>We are sorry, but it appears that page is not available. Please access another page from the page naviagation.
							</section>

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