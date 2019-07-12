<?php

namespace rst;

class Plugins
{
    
    /**
     * @var null|\rst\Plugins
     */
    private static $instance = null;
    
    /**
     * @var \TGM_Plugin_Activation
     */
    private $tgmpa;
    
    /**
     * @var array
     */
    private $plugins;
    
    /**
     * @var array
     */
    private $config;
    
    /**
     * @var string
     */
    private $bundled;
    
    
    /**
     * Plugins constructor.
     */
    private function __construct()
    {
        if( is_admin() ) {
            
            $this->bundled = get_template_directory() . '/inc/plugins/';
            
            $this->installPlugins();
            
        }
        
    }
    
    
    /**
     * Config TGMPa
     */
    private function configTGMPA()
    {
    
        $this->config = apply_filters( 'rst_tgmpa_config', [
            'id'           => 'rst',
            'default_path' => '',
            'menu'         => 'tgmpa-install-plugins',
            'parent_slug'  => 'plugins.php',
            'capability'   => 'manage_options',
            'has_notices'  => true,
            'dismissable'  => true,
            'dismiss_msg'  => '',
            'is_automatic' => false,
            'message'      => '',
        ] );
        
    }
    
    
    /**
     * Required plugins
     */
    private function configPlugins()
    {
    
        $this->plugins = apply_filters( 'rst_plugins', [
        
            # Advanced Custom Fields:
            [
                'name'      => 'Advanced Custom Fields PRO',
                'slug'      => 'advanced-custom-fields-pro',
                'source'    => $this->bundled . 'advanced-custom-fields-pro.zip'
            ],
        
            # WP SyncDB
            [
                'name'      => 'WP SyncDB',
                'slug'      => 'wp-sync-db',
                'source'    => 'https://github.com/wp-sync-db/wp-sync-db/archive/master.zip'
            ],

            # Contact Form 7
            [
                'name'      => 'Contact Form 7',
                'slug'      => 'contact-form-7'
            ],
            # Advanced Custom Fields: Font Awesome
            [
                'name'      => 'Advanced Custom Fields: Font Awesome',
                'slug'      => 'advanced-custom-fields-font-awesome'
            ],
            # Yoast SEO
            [
                'name'      => 'Yoast SEO',
                'slug'      => 'wordpress-seo'
            ],

            # All In One WP Security
            [
                'name'      => 'All In One WP Security',
                'slug'      => 'all-in-one-wp-security-and-firewall'
            ],
            # Autoptimize
            [
                'name'      => 'Autoptimize',
                'slug'      => 'autoptimize'
            ],
            # W3 Total Cache
            [
                'name'      => 'W3 Total Cache',
                'slug'      => 'w3-total-cache'
            ],
    
        ] );
        
    }
    
    
    /**
     * Init TGMPA
     */
    private function installPlugins()
    {

        # Prepare config and plugins list
        $this->configTGMPA();
        $this->configPlugins();
    
        # Obtain TGMPA singleton instance
        $this->tgmpa = \TGM_Plugin_Activation::get_instance();
        $this->tgmpa->config( $this->config );
        
        # Register required plugins in TGMPA instance
        foreach( $this->plugins as $plugin ){
            $this->tgmpa->register( $plugin );
        }
        
    }
    
    
    /**
     * @return Plugins
     */
    public static function getInstance() : Plugins
    {
        
        if( self::$instance === null ){
            self::$instance = new self;
        }
        
        return self::$instance;
        
    }
    
}
