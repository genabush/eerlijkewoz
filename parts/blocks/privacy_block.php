<?php
$left_header = get_sub_field('privacy_block_left_header');
$title = get_sub_field('privacy_block_title');
$text = get_sub_field('privacy_block_text');
?>
    <section class="privacy-terms">
        <div class="privacy-terms__container">
            <div class="privacy-terms__row">
                <div class="col col-sm">

                    <?php if (!empty($left_header)) { ?>
                    <h5 class="privacy-terms__left_title"><?php echo $left_header; ?></h5>
                    <?php } ?>

                </div>
                <div class="col col-lg articles">
                    <div class="privacy-terms__text_block">

                        <?php if (!empty($title)) { ?>
                        <h3 class="privacy-terms__main_title">
                            <?php echo $title; ?>
                        </h3>
                        <?php } ?>

                        <?php if (!empty($left_header)) { ?>
                            <p><?php echo $text; ?></p>
                        <?php } ?>
                    </div>
                    <?php if (get_sub_field('privacy_block_items')):
                        while (has_sub_field('privacy_block_items')):

                                $item_title = get_sub_field('privacy_block_item_title');
                                $item_text = get_sub_field('privacy_block_item_text');
                                ?>
                            <div class="privacy-terms__text_block">
                                <?php if (!empty($item_title)) { ?>
                                    <h4 class="privacy-terms__articles_title"><?php echo $item_title; ?></h4>
                                <?php } ?>
                                <?php if (!empty($item_text)) { ?>
                                    <?php echo $item_text; ?>
                                <?php } ?>
                            </div>
                            <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
