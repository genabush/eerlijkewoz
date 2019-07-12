<?php
$title = get_sub_field('text_with_photo_title');
$text = get_sub_field('text_with_photo_text');

$bellow_title = get_sub_field('text_with_photo_bellow_title');
$bellow_text = get_sub_field('text_with_photo_bellow_text');

$image = get_sub_field('text_with_photo_image');
?>
<div class="pre_footer">
    <div class="gemeentes_container">
        <div class="column_wrapper">
            <div class="column_img">
                <?php if (!empty($image)) { ?>
                    <img src="<?php echo $image;?>" alt="">
                <?php } ?>
                <div class="text">
                    <?php if (!empty($bellow_title)) { ?>
              <span>
                <b><?php echo $bellow_title;?></b>
              </span>
                    <?php } ?>
                    <?php if (!empty($bellow_text)) { ?>
                    <span>
                <?php echo $bellow_text;?>
              </span>
                    <?php } ?>
                </div>
            </div>
            <div class="column_text">
                <?php if (!empty($title)) { ?>
                <h3>
                    <?php echo $title;?>
                </h3>
                <?php } ?>
                <?php if (!empty($text)) { ?>
                    <?php echo $text;?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
