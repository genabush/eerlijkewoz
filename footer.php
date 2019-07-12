<?php

/**
 * Footer template
 *
 * @package     WordPress
 * @subpackage  RST v3
 * @since       1.0.0
 * @author      Luke Kortunov
 */

?>

<footer class="footer">
	<div class="footer-top">
		<div class="container">
			<div class="inner-holder">
				<div class="inner-content">
					<?php
					$logo = get_field('logo','option');
					?>
					<?php if(!empty($logo)){?>
						<strong class="logo"><a href="/"><img src="<?php echo  $logo;?>" alt="<?php bloginfo('name'); ?>"></strong></a>
					<?php }?>
					
					<p><?php echo get_field('footer_descriptions','option');?></p>
				</div>
				
				<div class="inner-box">
					<div class="col">
						<?php
						dynamic_sidebar('footer1');
						?>
					</div>
					<div class="col">
						<?php
						dynamic_sidebar('footer2');
						?>
					</div>
					<div class="col">
						<?php
						dynamic_sidebar('footer3');
						?>
					</div>
					<div class="col">
						<?php
						dynamic_sidebar('footer4');
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<?php if( have_rows('social_network', 'option') ): ?>

			<ul class="footer-social">

				<?php while( have_rows('social_network', 'option') ): the_row(); ?>

					<li><a href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('icon'); ?></a></li>

				<?php endwhile; ?>

			</ul>

		<?php endif; ?>

		<div class="footer-wrap">
			<?php
			if (has_nav_menu('footer')) {
				wp_nav_menu(['theme_location' => 'footer', 'menu_id' => 'menu-footer']);
			}
			?>

			<p><?php echo get_field('copyright','option');?></p>
			<?php wp_footer(); ?>

			</div>
		</div>
</footer>
</div>
</body>
</html>
