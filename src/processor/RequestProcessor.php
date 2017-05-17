<?php

namespace Manishyadav\LaravelApplicationLogs\Processor;

/**
 * This class is used as a custom RequestProcessor
 * preprocessor to add some more information from the request to our logs.
 *  
 * @author manishyadav <manishyadav0012@gmail.com>
 *
 */
class RequestProcessor {
    
    /**
     * This function is automatically called by the app
     * It is used to fetch the extra information from  request object
     * and add it to $record['extra'] array.
     *  
     * @param array $record
     */
    public function __invoke(array $record) {
       
       //getting the request object
        $request = request();
    
        //adding request information to the record array
        $record['extra']['serve'] = $request->server('SERVER_ADDR');
        $record['extra']['host'] = $request->getHost();
        $record['extra']['uri'] = $request->getPathInfo();
        $record['extra']['request'] = $request->all();
       
        return $record;
    }
}