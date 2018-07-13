<?php
/**
 * Created by PhpStorm.
 * User: nitishkumar
 * Date: 13/7/18
 * Time: 3:06 PM
 */

namespace AwesomePeople\LaravelLogEnhancer;

class RequestDataHandler
{
    /**
     * Adds additional request data to the log message.
     */
    public function __invoke($record)
    {
        if (config('laravel_log_enhancer.log_input_data')) {
            $record['extra']['inputs'] = request()->except(config('laravel_log_enhancer.ignore_input_fields'));
        }
        if (config('laravel_log_enhancer.log_request_headers')) {
            $record['extra']['headers'] = request()->header();
        }
        if (config('laravel_log_enhancer.log_session_data')) {
            $record['extra']['session'] = session()->all();
        }
        return $record;
    }
}