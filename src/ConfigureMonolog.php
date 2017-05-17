<?php

namespace Manishyadav\LaravelApplicationLogs;

use Manishyadav\LaravelApplicationLogs\handler\EloquentHandler;
use Manishyadav\LaravelApplicationLogs\Processor\RequestProcessor;

/**
 * This class is used to configure the monolog instance 
 * to save the logs in database 
 * 
 * @author manishyadav <manishyadav0012@gmail.com>
 *
 */
class ConfigureMonolog{
    
    /**
     * This funtion is used to configure the monolog
     * logger instance here.
     * 
     * @param \Monolog\Logger $monolog
     * @return \Monolog\Logger
     */
    public function getLogger(\Monolog\Logger $monolog)
    {
        //creating the instance of our EloquentHandler which
        // saves the error log in database
        $handler = new EloquentHandler();
        $handler->setFormatter(new \Monolog\Formatter\LineFormatter(null, null, true, true));
        
        //attatching our RequestProcessor class object to the monolog instance
        $monolog->pushProcessor(new RequestProcessor());
        
        //attatacing our handler to monolog instance 
        $monolog->pushHandler($handler);
        
        return $monolog;
    }
}