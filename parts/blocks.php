<?php
if( have_rows('blocks_content') ):
    while ( have_rows('blocks_content') ) : the_row();
        $layout =  get_row_layout();
        get_template_part('parts/blocks/'.$layout);
    endwhile;
else :
    // no layouts found
endif;
