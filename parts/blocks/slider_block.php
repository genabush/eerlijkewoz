<?php if (get_sub_field('slider_block_sliders')): ?>
<div class="gemeentes_slider_wrapper">

    <div class="navigate_counter">
        <span class="active"></span>
        <span class="next"></span>
    </div>
    <div class="gemeentes_slider">

        <?php while (has_sub_field('slider_block_sliders')):

            $title = get_sub_field('slider_block_sliders_title');
            $image = get_sub_field('slider_block_sliders_image');

            ?>

            <div class="gemeentes_slider_item" style="background-image: url(<?php echo $image; ?>);">
                <?php if (!empty($title)) { ?>
                    <div class="gemeentes_slider_caption">
                    <?php echo $title; ?>
                    </div><?php } ?>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

