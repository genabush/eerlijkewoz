<?php

namespace rst;


class Helpers
{
    
    /**
     * @var null
     */
    private static $instance = null;
    
    
    /**
     * Helpers constructor.
     */
    public function __construct()
    {
        
    }
    
    
    /**
     * @return Helpers
     */
    public static function getInstance() : Helpers
    {
        
        if( self::$instance === null ){
            self::$instance = new self;
        }
        
        return self::$instance;
        
    }

}
