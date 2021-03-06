<div class="outer-container slider purple">

	<div class="variable-width">

		<?php
			if( have_rows('hero_slideshow') ):
			while ( have_rows('hero_slideshow') ) : the_row();
		?>

			<?php
				if( have_rows('slide') ):
				while ( have_rows('slide') ) : the_row();

				$image = get_sub_field('hero_image');
			?>

				<a href="<?php the_sub_field('hero_link'); ?>" class="slider-item">

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

					<div class="slider-text">

						<?php the_sub_field('hero_text'); ?>

					</div>

				</a>

			<?php
				endwhile;
				endif;
			?>

		<?php
			endwhile;
			endif;
		?>

	</div>

	<div class="sliderprevious">

		<img src="<?php bloginfo('template_url');?>/assets/img/previous.svg" />

	</div>

	<div class="slidernext">

		<img src="<?php bloginfo('template_url');?>/assets/img/next.svg" />

	</div>

</div>
