<?php

namespace rst;

class PostTypes
{
    
    /**
     * PostTypes constructor.
     */
    public function __construct()
    {
     
        add_action( 'init', [ $this, 'registerPostTypeNews' ] );
        
    }
    
    
    /**
     * Register custom post type: «News»
     */
    public function registerPostTypeNews()
    {
        

        $labels = [
            'name'                => __( 'Testimonals',                    'eerlijke' ),
            'singular_name'       => __( 'Testimonals',                    'eerlijke' ),
            'add_new'             => __( 'Add Testimonals',                'eerlijke' ),
            'add_new_item'        => __( 'Add new Testimonals',            'eerlijke' ),
            'edit_item'           => __( 'Edit Testimonals',               'eerlijke' ),
            'new_item'            => __( 'New Testimonals',                'eerlijke' ),
            'view_item'           => __( 'View Testimonals',               'eerlijke' ),
            'search_items'        => __( 'Search Testimonals',             'eerlijke' ),
            'not_found'           => __( 'Not found',               'eerlijke' ),
            'not_found_in_trash'  => __( 'News not found in trash', 'eerlijke' ),
            'parent_item_colon'   => __( '',                        'eerlijke' ),
            'menu_name'           => __( 'Testimonals',                    'eerlijke' ),
        ];
        
        $args   = [
            'label'               => null,
            'labels'              => $labels,
            'description'         => '',
            'public'              => true,
            'publicly_queryable'  => null,
            'exclude_from_search' => null,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'show_in_rest'        => true,
            'rest_base'           => 'news',
            'menu_position'       => true,
            'menu_icon'           => 'dashicons-admin-site',
            'hierarchical'        => false,
            'supports'            => [ 'title' ],
            'taxonomies'          => [],
            'has_archive'         => true,
            'rewrite'             => true,
            'query_var'           => true,
        ];
        
         register_post_type( 'testimonals', $args );

        
    }
    
}
