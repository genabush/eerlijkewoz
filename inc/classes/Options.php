<?php

namespace rst;

class Options
{

    /**
     * Options constructor.
     */
    public function __construct()
    {

        $this->createMainOptionsPage();

    }


    /**
     * Create main options page
     *
     * @link    https://www.advancedcustomfields.com/add-ons/options-page/
     */
    private function createMainOptionsPage()
    {

        if( function_exists('acf_add_options_page') ) {

            acf_add_options_page(array(
                'page_title' 	=> __( 'Theme parameters',       'eerlijke' ),
                'menu_title'	=> __( 'Theme parameters',       'eerlijke' ),
                'menu_slug' 	=> __( 'eerlijke-options', 'eerlijke' ),
                'capability'	=> __( 'edit_posts',           'eerlijke' ),
                'redirect'		=> false
            ));

        }

    }


}
