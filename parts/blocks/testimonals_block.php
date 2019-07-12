<?php
$title = get_sub_field('testimonals_block_title');
$below_title = get_sub_field('testimonals_block_below_title');
$below_text = get_sub_field('testimonals_block_below_text');
$num = get_sub_field('testimonals_block_number');
$num = (!empty($num)) ? (int)$num : -1 ;

?>
<section class="testimonials">
	<div class="container">
		<div class="gemeentes_slider_wrapper">
            <?php if (!empty($title)) { ?>
            <h2 class="back_text" data-caption="Testimonals"><?php echo $title; ?></h2>
            <?php } ?>
			<div class="navigate_counter">
				<span class="active"></span>
				<span class="next"></span>
			</div>
            <?php

            $args = array(
                'post_type' => 'testimonals',
                'posts_per_page' => $num
            );
            $query = new WP_Query($args);

            if ( $query->have_posts() ) {?>
                <div class="home_slider">
                    <?php  while ( $query->have_posts() ) {
                        $query->the_post();
                        get_template_part('parts/loops/testimonals');
                    } ?>
                </div>
            <?php }

            wp_reset_postdata();

            ?>


			<div class="inner-content">
                <?php if (!empty($below_title)) { ?>
                    <strong class="title"><?php echo $below_title; ?></strong>
                <?php } ?>
                <?php if (!empty($below_text)) { ?>
                    <div class="inner-text">
                        <p><?php echo $below_text; ?></p>
                    </div>
                <?php } ?>
			</div>
		</div>

	</div>
</section>
