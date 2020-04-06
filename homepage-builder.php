<div class="row">
	<div class="small-12 medium-10 medium-centered large-10 columns">

		<!-- Flexible Content #2 - Hp_builder -->
		<?php while(has_sub_field("hp_builder")): ?>
			<?php if(get_row_layout() == 'hp_bl_title'): // Title ?>
				<h2 class="home--t-title"><?php the_sub_field('bl_title');?></h2>
				<hr class="bar">
			<?php endif; ?>

			<?php if(get_row_layout() == 'hp_bl_intropg'): // Introduction Paragraph ?>
				<p class="home--p-intro"><?php the_sub_field('bl_ipg');?></p>
			<?php endif; ?>
			
			<?php if(get_row_layout() == 'hp_bl_pg'): // Paragraph ?>
				<?php the_sub_field('bl_pg');?>
			<?php endif; ?>

			<?php if(get_row_layout() ==  'hp_bl_ic'): // Icon ?>
				<img style="float:right;" src="<?php the_sub_field('bl_ic');?>">
			<?php endif; ?>

			<?php if(get_row_layout() == 'hp_bul_pts'): // Bullet List ?>
                <?php if( get_sub_field('bul_intro') ): ?>
                    <p class="home--li-intro"><?php the_sub_field('bul_intro'); ?></p>
                <?php endif; ?>

                <?php if( have_rows('bl_bul') ): // Repeater Field Name ?>
					<ul class="bullet-black"> 
						<?php while( have_rows('bl_bul') ): the_row(); ?>
							<li><?php the_sub_field('bul_pt'); ?></li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

	    	<?php endif; ?>
		<?php endwhile; ?>

	</div>
</div><!-- end .row -->