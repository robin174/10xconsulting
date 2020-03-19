<section class="block--bio"><!-- add padding -->
	<section class="unit--headshot">
		<figure class="headshot">
			<?php the_post_thumbnail(); ?>
		</figure>
	</section>
	<section class="unit--bio">
		<h2 class="bio-name text-center"><?php the_title(); ?></h2>
		<?php get_template_part('template'); ?>
	</section>
</section>