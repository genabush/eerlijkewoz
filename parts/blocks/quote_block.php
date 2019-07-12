<?php
$color = get_sub_field('quote_block_color');

$title = get_sub_field('quote_block_title');
$text = get_sub_field('quote_block_text');
$image = get_sub_field('quote_block_image');
$below_title = get_sub_field('quote_block_image_below_title');
$below_text = get_sub_field('quote_block_image_below_text');

$text_quote = get_sub_field('quote_block_text_quote');
$text_after_quote = get_sub_field('quote_block_after_quote');
$column = get_sub_field('quote_block_column');
$class_column = ($column[0] == 1) ? 'col-one-layout': '';

$link = get_sub_field('quote_block_link');
$url = (!empty($link['url'])) ? $link['url'] : '';
$text_link = (!empty($link['title'])) ? $link['title'] : '';
$link_class = get_sub_field('quote_block_link_class');

?>

<?php
$bg_style = (!empty($color)) ? 'style="background-color: ' . $color . ';"' : '';
?>
<section class="post-section" <?php echo $bg_style; ?>>
    <div class="post-section__container">
        <div class="post-section__row">
            <div class="post-section__col post-section__col--sm">
                <?php if (!empty($title)) { ?>
                    <h2 class="post-section__title"><?php echo $title; ?></h2>
                <?php } ?>
                <?php if (!empty($text)) { ?>
                    <p>
                        <?php echo $text; ?>
                    </p>

                <?php } ?>
            </div>
            <div class="post-section__col post-section__col--lg">
                <?php if (!empty($text_quote)) { ?>
                    <div class="quote-block">
                        <span class="quote-block__symbol">“</span>
                        <p class="quote-block__text"><?php echo $text_quote; ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="post-section__row">
            <div class="post-section__col post-section__col--sm">
                <?php if (!empty($image)) { ?>
                    <img class="post-section__img"
                         src="<?php echo $image; ?>" alt="">
                <?php } ?>
                <div class="post-section-bottom">
                    <?php if (!empty($below_title)) { ?>
                        <h4 class="post-section-bottom__title"><?php echo $below_title; ?></h4>
                    <?php } ?>
                    <?php if (!empty($below_text)) { ?>
                        <p class="post-section-bottom__paragraph"><?php echo $below_text; ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="post-section__col post-section__col--lg <?php echo $class_column; ?>">

                <?php if (!empty($text_after_quote)) { ?>

                    <div class="col">
                        <?php echo $text_after_quote; ?>
                    </div>
                <?php } ?>


            <?php if (!empty($link)) { ?>
                <a href="<?php echo $url; ?>"
                   class="btn btn-blue col-one-layout-btn" <?php echo $link_class; ?>><?php echo $text_link; ?></a>
            <?php } ?>
            </div>
        </div>
    </div>
</section>
