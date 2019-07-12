<?php
$img = get_sub_field('bg_third_block_bg_image');
$color = get_sub_field('bg_third_block_bg_color');
$ad_class = get_sub_field('bg_third_block_type_template');
$title = get_sub_field('bg_third_block_main_title');
$text = get_sub_field('bg_third_block_text');
$sub_title = get_sub_field('bg_third_block_sub_title');
$sub_text = get_sub_field('bg_third_block_sub_text');
$quote = get_sub_field('bg_third_block_quote');
$quote_author = get_sub_field('bg_third_block_quote_author');
$button_class = get_sub_field('bg_third_block_link_class'); // additional class for js

$link = get_sub_field('bg_third_section_block_link');
$url = (!empty($link['url'])) ? $link['url'] : '';
$text_link = (!empty($link['title'])) ? $link['title'] : '';

if (!empty($img) || !empty($color)) {
    $bg_style = 'style="';
    $bg_style .= (!empty($img)) ? 'background-image: url(' . $img . ');' : '';
    $bg_style .= (!empty($color)) ? 'background-color: ' . $color . ';' : '';
    $bg_style .= '"';
}
?>

<section class="main-banner <?php echo $ad_class; ?>" <?php echo $bg_style; ?>>
    <div class="container">
        <div class="col">
            <h1 class="main-banner__title">
                <?php if (!empty($title)) { ?>
                    <?php echo $title; ?>
                <?php } ?>
            </h1>
            <?php if (!empty($text)) { ?>
                <p class="main-banner__text"><?php echo $text; ?></p>
            <?php } ?>

        </div>
        <div class="main-banner__bottom">
            <div class="col">
                <h4 class="main-banner__subtitle">
                    <?php if (!empty($sub_title)) { ?>
                        <?php echo $sub_title; ?>
                    <?php } ?>
                </h4>
                <?php if (!empty($sub_text)) { ?>
                    <?php $paragraphs = explode("\r\n", $sub_text); ?>
                    <?php foreach ($paragraphs as $paragraph):
                        if ($paragraph) {
                            ?>
                            <p class="main-banner__paragraph"><?php echo $paragraph; ?></p>
                        <?php }
                    endforeach; ?>
                <?php } ?>
                <?php if(!empty($link)){ ?>
                    <a href="<?php echo $url;?>" class="main-banner__link btn btn-blue <?php echo $button_class;?>"><?php echo $text_link;?></a>
                <?php }?>
            </div>
            <?php if (!empty($quote)) { ?>
                <div class="col">
                    <div class="main-banner__quote">
                        <p><?php echo $quote; ?></p>
                        <?php if (!empty($quote_author)) { ?>
                            <span class="name"><?php echo $quote_author; ?></span>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


