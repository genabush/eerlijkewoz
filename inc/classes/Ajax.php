<?php

namespace rst;

class Ajax
{
    
    /**
     * @var null
     */
    private static $instance = null;
    
    
    /**
     * @return Ajax
     */
    public static function getInstance() : Ajax
    {
        
        if( self::$instance === null ){
            self::$instance = new self;
        }
        
        return self::$instance;
        
    }
    
}