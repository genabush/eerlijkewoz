<?php

namespace rst;

class Core
{

    /** @var Core */
    private static $instance = null;

    /** @var Helpers */
    public $helpers;

    /** @var Actions */
    public $actions;

    /** @var Filters */
    public $filters;

    /** @var Plugins */
    public $plugins;

    /** @var Config */
    public $config;


    /** @var string */
    public $textdomain;


    /**
     * Core constructor.
     */
    private function __construct()
    {

        # Set-up vars
        $this->textdomain = apply_filters( 'rst_textdomain', 'eerlijke' );

        # Set-up theme default behavior
        $this->config = Config::getInstance();

        # Set-up helpers
        $this->helpers  = Helpers::getInstance();
        $this->actions  = Actions::getInstance();
        $this->filters  = Filters::getInstance();
        $this->plugins  = Plugins::getInstance();




        # Apply ACF options page
        new Options();

    }


    /**
     * @return Core
     */
    public static function getInstance() : Core
    {

        if( self::$instance === null ){
            self::$instance = new self;
        }

        return self::$instance;

    }

}
