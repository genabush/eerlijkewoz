<?php
$img = get_sub_field('rectengular_block_bg');
?>

<?php
$bg_style = (!empty($img)) ? 'style="background-image: url(' . $img . ');"' : '';
?>
<section class="cards" <?php echo $bg_style;?>>
    <div class="container">
        <div class="col-wrap">
            <?php if (get_sub_field('rectengular_block_items')): ?>

                <?php while (has_sub_field('rectengular_block_items')):

                    $img_icon = get_sub_field('rectengular_block_items_image');
                    $title = get_sub_field('rectengular_block_items_title');
                    $text = get_sub_field('rectengular_block_items_text');

                    $link = get_sub_field('rectengular_block_items_link');
                    $url = (!empty($link['url'])) ? $link['url'] : '';
                    $text_link = (!empty($link['title'])) ? $link['title'] : '';
                    ?>
                    <div class="col">

                        <?php if (!empty($img_icon)) { ?>
                            <img src="<?php echo $img_icon; ?>" alt="">
                        <?php } ?>
                        <?php if (!empty($title)) { ?>
                            <storng class="title"><?php echo $title; ?></storng>
                        <?php } ?>

                        <?php if (!empty($text)) { ?>
                            <p><?php echo $text; ?></p>
                        <?php } ?>
                        <a href="<?php echo $url; ?>" class="btn btn-link"><?php echo $text_link; ?></a>
                    </div>


                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
</section>
