<?php
$img = get_sub_field('bg_block_img');
$title = get_sub_field('bg_block_title');
$text = get_sub_field('bg_block_text');
$form_code = get_sub_field('bg_block_form_code');
$bg_block_color_text = get_sub_field('bg_block_color_text');
?>

<?php
$bg_style = (!empty($img)) ? ' style="background-image: url(' . $img . ');"' : '';
?>

<section class="intro-section <?php echo $bg_block_color_text;?>" <?php echo $bg_style; ?>>
    <div class="container">
        <div class="inner-content">
            <?php if (!empty($title)) { ?>
                <h1><?php echo $title; ?></h1>
            <?php } ?>
            <?php if (!empty($text)) { ?>
                <p><?php echo $text; ?></p>
            <?php } ?>
            <?php if (get_sub_field('bg_block_button')): ?>
                <div class="btn-wrap">


                    <?php while (has_sub_field('bg_block_button')):

                        $type = get_sub_field('bg_block_button_type'); // dark or transparent
                        $button_class = get_sub_field('bg_block_button_class'); // additional class for js

                        $link = get_sub_field('bg_block_button_link');
                        $url = (!empty($link['url'])) ? $link['url'] : '';
                        $text_link = (!empty($link['title'])) ? $link['title'] : '';
                        ?>
                        <a href="<?php echo $url; ?>"
                           class="btn btn-<?php echo $type; ?> <?php echo $button_class; ?>"><?php echo $text_link; ?></a>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>

        <?php if (!empty($form_code)) { ?>
            <?php echo $form_code; ?>
        <?php } ?>


    </div>
</section>
