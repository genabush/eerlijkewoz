<?php
$img = get_sub_field('cv_block_bg_image');
$title = get_sub_field('cv_block_title');
$link = get_sub_field('cv_block_link');
$url = (!empty($link['url'])) ? $link['url'] : '';
$text_link = (!empty($link['title'])) ? $link['title'] : '';
$link_class = get_sub_field('cv_block_link_class');

$bg_style = (!empty($img)) ? 'style="background: url('.$img['url'].') no-repeat  50% 50%;"' : '';?>

<section class="banner" <?php echo $bg_style; ?>>
    <div class="container">
        <h2 class="banner__title">
            <?php if(!empty($title)): ?>
                <?php echo $title;?>
            <?php endif; ?>
        </h2>
        <?php if(!empty($link)): ?>
            <a href="<?php echo $url;?>" class="<?php echo $link_class;?> banner__link"><?php echo $text_link;?></a>
        <?php endif; ?>
    </div>
</section>




