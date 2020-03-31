<?php
/*
Template Name: Page - Template
*/
get_header(); ?>

<section class="area--head" style="background:url(<?php the_field('header_image'); ?>)no-repeat top center;background-size: cover;">
	<!-- to update css if no title - adjust padding -->
</section>

<section class="area--template">
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
							<h1><?php the_title(); ?></h1>
							<?php get_template_part('template'); ?>
						</section>
					</div>
				</div><!-- end .row -->

			</div>
		</div><!-- end .row -->
	</section>
</section>

<section class="area--additional">
	<div class="row">
		<div class="small-12 medium-11 medium-centered large-10 columns">

			<div class="row">
				<div class="small-12 medium-12 large-12 columns">
					<section class="block--quote">
						<?php $post_object = get_field('quote_selector');
						if( $post_object ): 
							// override $post
							$post = $post_object;
							setup_postdata( $post );
						?>
							<blockquote class="quote-content">
			        			<?php the_field('quote_content'); ?>
					     	</blockquote>
					    <?php wp_reset_postdata(); ?>
						<?php endif; ?>
					</section>
				</div>
			</div><!-- end .row -->

		</div>
	</div><!-- end .row -->
</section>

<section class="area--cta">
	<div class="row">
		<div class="small-12 medium-11 medium-centered large-10 columns">
			<div class="row">
				<div class="small-12 medium-12 large-12 columns">
					<?php if(is_page(25)) {
						get_template_part('cta-resource');
					} else {
						get_template_part('cta-client');
					} ?>
				</div>
			</div><!-- end .row -->
		</div>
	</div><!-- end .row -->
</section>

<?php get_footer(); ?>
