<section class="icons-block">
    <div class="container">
        <div class="row">
            <?php if (get_sub_field('icons')): ?>
                <?php while (has_sub_field('icons')):
                    $icon_title = get_sub_field('icons_block_icons_title');
                    $icon_text = get_sub_field('icons_block_icons_text');
                    $icon_image = get_sub_field('icons_block_icons_img');
                    ?>
                    <div class="item">
                        <?php if (!empty($icon_image)) { ?>
                            <div class="img-wrap">
                                <img src="<?php echo $icon_image; ?>" alt="">
                            </div>
                        <?php } ?>
                        <div class="inner-content">
                            <?php if (!empty($icon_title)) { ?><h4><?php echo $icon_title; ?></h4><?php } ?>
                            <?php if (!empty($icon_text)) { ?><p><?php echo $icon_text; ?></p><?php } ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
