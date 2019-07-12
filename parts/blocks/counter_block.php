<?php
$title = get_sub_field('counter_block_title');
$text = get_sub_field('counter_block_text');

$title_counter = get_sub_field('counter_block_title_counter');
$text_counter = get_sub_field('counter_block_text_counter');

$counter_value = get_sub_field('counter_block_counter_value');
$max_counter_value = get_sub_field('counter_block_max_counter_value');

$per_sum = (!empty($counter_value) && !empty($max_counter_value)) ? round(((int)$counter_value * 100)/$max_counter_value) : '';
?>
<section class="peildatum decor white">
    <div class="container">
        <div class="inner-content">
            <?php if(!empty($title)){ ?>
            <h3 class="back_text" data-caption="<?php echo $title;?>"><?php echo $title;?></h3>
            <?php } ?>
            <div class="column-wrap">
                <?php if(!empty($text)){ ?>
                    <?php echo $text;?>
                <?php } ?>
            </div>
        </div>
        <div class="inner-content">
            <div class="col-wrap">
                <div class="col">
                    <?php if(!empty($per_sum)){ ?>
                    <div class="chart-wrap">
                        <div class="chart">
                            <div class="chart-circle">
                            </div>
                            <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="200" height="200" xmlns="http://www.w3.org/2000/svg">
                                <circle class="circle-chart__background" stroke="" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                <circle class="circle-chart__circle" stroke="#233488" stroke-width="2.5" stroke-dasharray="<?php echo $per_sum;?>" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.51549431" />
                            </svg>
                            <div class="chart-percent">
                                <span class="count"><?php echo $per_sum;?></span>
                                <span class="txt">percent</span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col">
                    <?php if(!empty($title_counter)){ ?>
                    <strong class="title"><?php echo $title_counter;?></strong>
                    <?php } ?>
                    <?php if(!empty($counter_value)){ ?>
                        <strong class="total"><?php echo number_format($counter_value, 0, '0' , ',');?></strong>
                    <?php } ?>
                    <?php if(!empty($text_counter)){ ?>
                        <p><?php echo $text_counter;?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
