<?php

namespace Manishyadav\LaravelApplicationLogs\handler;

use Monolog\Handler\AbstractProcessingHandler;
use Manishyadav\LaravelApplicationLogs\Models\Log;

/**
 * This class is used as a custom Mongolog 
 * EloquentHandler to store logs in a database. 
 * 
 * @author manishyadav <manishyadav0012@gmail.com>
 *
 */
class EloquentHandler extends AbstractProcessingHandler {
    
    protected function write(array $record) {
       
        Log::create([
            'env'     => $record['channel'],
            'message' =>(string)$record['message'],
            'level'   => $record['level_name'],
            'context' => json_encode($record['context']),
            'extra'   => json_encode($record['extra'])
        ]);
        
    }
}