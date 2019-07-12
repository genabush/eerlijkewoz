<section class="img-section">
    <div class="container">
        <?php
        $img = get_sub_field('with_icons_block_bg');
        $title = get_sub_field('with_icons_block_title');
        $text = get_sub_field('with_icons_block_text');
        ?>

        <div class="col-wrap">
            <div class="col">
                <?php if (!empty($title)) { ?>
                    <h3 class="back_text" data-caption="<?php echo $title; ?>"><?php echo $title; ?></h3>
                <?php } ?>
                <?php if (!empty($text)) { ?>
                    <p><?php echo $text; ?></p>
                <?php } ?>
                <?php if (!empty($img)) { ?>
                    <div class="img-box">
                        <img src="<?php echo $img; ?>" alt="">
                    </div>
                <?php } ?>
            </div>
            <div class="col">
                <div class="row">
                    <?php if (get_sub_field('with_icons_block_icons')): ?>
                        <?php while (has_sub_field('with_icons_block_icons')):

                            $icon_title = get_sub_field('with_icons_block_icon_title');
                            $icon_text = get_sub_field('with_icons_block_icon_text');
                            $icon_image = get_sub_field('with_icons_block_icon_image');
                            ?>
                            <div class="item">
                                <?php if (!empty($icon_image)) { ?>
                                    <div class="img-wrap">
                                        <img src="<?php echo $icon_image; ?>" alt="image description">
                                    </div>
                                <?php } ?>
                                <div class="inner-content">
                                    <?php if (!empty($icon_title)) { ?>
                                        <h4><?php echo $icon_title; ?></h4>
                                    <?php } ?>

                                    <?php if (!empty($icon_text)) { ?>
                                        <p><?php echo $icon_text; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php endwhile; ?>


                    <?php endif; ?>
                </div>
                <?php if (get_sub_field('with_icons_block_button')): ?>
                    <div class="btn-wrap">

                        <?php while (has_sub_field('with_icons_block_button')):

                            $type = get_sub_field('with_icons_block_button_type'); // dark or transparent
                            $button_class = get_sub_field('with_icons_block_button_class'); // additional class for js

                            $link = get_sub_field('with_icons_block_button_link');
                            $url = (!empty($link['url'])) ? $link['url'] : '';
                            $text_link = (!empty($link['title'])) ? $link['title'] : '';
                            ?>
                            <a href="<?php echo $url; ?>"
                               class="btn btn-<?php echo $type; ?> <?php echo $button_class; ?>"><?php echo $text_link; ?></a>

                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
