
<?php
		
		$img = get_sub_field('text_section_block_link_img');
		$title = get_sub_field('text_section_block_title');
		$text = get_sub_field('text_section_block_text');
		$position = get_sub_field('text_section_block_position');
		
		$link = get_sub_field('text_section_block_link');
		$url = (!empty($link['url'])) ? $link['url'] : '';
		$text_link = (!empty($link['title'])) ? $link['title'] : '';
		$link_class = get_sub_field('text_section_block_link_class');
		?>
		
		<?php
        		$bg_style = (!empty($img)) ? 'style="background-image: url('.$img.');"' : '';
		?>
<section class="text-section <?php echo $position;?>" <?php echo $bg_style;?>>
    <div class="container">

		


		<div class="col-wrap">
			<div class="col">
                <?php if(!empty($title)){ ?>
                <h2><?php echo $title;?></h2>
                <?php } ?>
                <?php if(!empty($text)){ ?>
                    <p><?php echo $text;?></p>
                <?php } ?>
                <?php if(!empty($link)){ ?>
				<a href="<?php echo $url;?>" class="btn btn-blue <?php echo $link_class;?>"><?php echo $text_link;?></a>
                <?php }?>
			</div>
		</div>
	</div>
</section>
