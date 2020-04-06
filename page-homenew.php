<?php
/*
Template Name: Page - Home (New)
*/
get_header(); ?>

<section class="area--head" style="background:url(<?php the_field('header_image'); ?>)no-repeat top center;background-size: cover;">
	<!-- to update css if no title - adjust padding -->
</section>

<?php while(has_sub_field("homepage_block")): ?>
	
	<!-- Block: Blue -->
	<?php if(get_row_layout() == 'block_blue'): // Blue ?>
		<section class="home-block--blue" style="background-color:#40C8F4;">
			<section style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/10x-binary-white.png') no-repeat bottom center;">
				
				<div class="row">
					<div class="small-12 medium-10 medium-centered large-10 columns">
						<div class="" style="padding-top:50px;padding-bottom:50px;">
							
							<!-- Title -->
							<?php if( get_sub_field('block_title') ): ?>
								<h4 style="color:white;font-weight:bold;"><?php the_sub_field('block_title');?></h4>
							<?php endif; ?>

							<!-- Introduction -->
							<?php if( get_sub_field('block_intro_paragraph') ): ?>
								<p style="color:black;"><strong><?php the_sub_field('block_intro_paragraph');?></strong></p>
							<?php endif; ?>
							
							<!-- Paragraph(s) -->
							<div class=""><?php the_sub_field('block_paragraph');?></div>
							
							<!-- Bullet section = optional - how to do that? -->
							<div class="">
								<!-- Bullet - Introduction -->
								<?php if( get_sub_field('block_bullet_introduction') ): ?>
									<p style="color:black;font-style:italic;font-weight:bold;"><strong><?php the_sub_field('block_bullet_introduction');?></strong></p>
								<?php endif; ?>

								<!-- Bullets -->
								<div>
									<?php if( have_rows('block_bullet_repeater') ): // Repeater 02 Field Name ?>
										<ul > 
											<?php while( have_rows('block_bullet_repeater') ): the_row(); ?>
												<li style="color:white;"><?php the_sub_field('bullet_point'); ?></li>
											<?php endwhile; ?>
										</ul>
									<?php endif; ?>
								</div>
						
							</div>

							<!-- Icon -->
							<?php if( get_sub_field('block_icon') ): ?>
								<img src="<?php the_sub_field('block_icon');?>">
							<?php endif; ?>

						</div>
					</div>
				</div><!-- end .row -->

			</section>
		</section>
	<?php endif; ?>

	<!-- Block: White -->
	<?php if(get_row_layout() == 'block_white'): // White ?>
		<section class="home-block--white" style="background-color:white;">
			<section style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/10x-binary-blue.png') no-repeat bottom center;">
				
				<div class="row">
					<div class="small-12 medium-10 medium-centered large-10 columns">
						<div class="" style="padding-top:50px;padding-bottom:50px;">

							<h4><?php the_sub_field('block_title');?></h4>
							<p style="color:black;"><strong><?php the_sub_field('block_intro_paragraph');?></strong></p>
							<div class=""><?php the_sub_field('block_paragraph');?></div>
							<img style="float:right;"src="<?php the_sub_field('block_icon');?>">

						</div>
					</div>
				</div><!-- end .row -->

			</section>
		</section>
	<?php endif; ?>

<?php endwhile; ?>


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
				</div><!-- end .row -->

			</div>
		</div><!-- end .row -->
	</section>
</section>

<?php get_footer(); ?>