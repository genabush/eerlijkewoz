<?php

namespace rst;

class Actions
{

    /**
     * @var null
     */
    private static $instance = null;


    public function __construct()
    {

        # Register custom post types
        new PostTypes();

    }


    /**
     * @return Actions
     */
    public static function getInstance() : Actions
    {

        if( self::$instance === null ){
            self::$instance = new self;
        }

        return self::$instance;

    }

}
