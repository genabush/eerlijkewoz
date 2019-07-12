<?php
$title = get_sub_field('two_column_block_title');

?>

<section class="text-section-bottom">
    <div class="text-section-bottom__container">
        <?php if(!empty($title)){ ?>
            <h2 class="text-section-bottom__title back_text" data-caption="<?php echo $title;?>"><?php echo $title;?></h2>
        <?php } ?>

        <?php if (get_sub_field('two_column_block_row')): ?>
                <?php while (has_sub_field('two_column_block_row')):

                    $block_text = get_sub_field('two_column_block_text');
                        if(!empty($block_text)){ ?>
                            <div class="text-section-bottom__col text-section-bottom__col--admin">
                                <?php echo $block_text;?>
                            </div>

                        <?php }
                    ?>

                <?php endwhile; ?>
        <?php endif; ?>



    </div>
</section>
