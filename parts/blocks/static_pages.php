<?php
$page = get_sub_field('static_pages_page');
$title = get_sub_field('static_pages_title');

if( have_rows('static_pages_texts') ){
    while( have_rows('static_pages_texts') ) {
        the_row();
        $sub_title = get_sub_field('static_pages_texts_text_title');
        $sub_text = get_sub_field('static_pages_texts_text_text');

        if(!empty($sub_title)) {?>
            <h3><?php echo $sub_title;?></h3>
        <?php }?>

        <?php if(!empty($sub_text)) {
            echo $sub_text;
        }
    }
}