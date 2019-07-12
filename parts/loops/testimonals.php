<?php
$title = get_field('author');
$text = get_field('text');
$image = get_field('image');
?>

<div class="home_slider_item">
    <div class="col-wrap">
        <div class="col">
            <blockquote>
                <?php if (!empty($text)) { ?>
                    <p><?php echo $text; ?></p>
                <?php } ?>
                <?php if (!empty($title)) { ?>
                    <cite><?php echo $title; ?></cite>
                <?php } ?>
            </blockquote>
        </div>
        <div class="col">
            <?php if (!empty($image)) { ?>
                <img src="<?php echo $image; ?>" alt="image description">
            <?php } ?>
        </div>
    </div>
</div>
