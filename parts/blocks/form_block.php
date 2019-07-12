<?php
$title = get_sub_field('form_block_title');
$text = get_sub_field('form_block_text');

$form_CF = get_sub_field('form_block_form_shortcode');
$form_html = get_sub_field('form_block_form_code');
?>

<section class="contact">
    <div class="contact-container">
            <?php if(!empty($form_CF)):?>
                <?php echo do_shortcode($form_CF);?>
            <?php else: ?>
                <?php echo $form_html;?>
            <?php endif; ?>
    </div>
</section>
