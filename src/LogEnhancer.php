<?php
/**
 * Created by PhpStorm.
 * User: nitishkumar
 * Date: 13/7/18
 * Time: 3:04 PM
 */

namespace AwesomePeople\LaravelLogEnhancer;

use Monolog\Processor\GitProcessor;
use Monolog\Processor\WebProcessor;
use Monolog\Processor\MemoryUsageProcessor;
class LogEnhancer
{
    /**
     * Customize the given logger instance.
     *
     * @param  \Illuminate\Log\Logger  $logger
     * @return void
     */
    public function __invoke($logger)
    {
        foreach ($logger->getHandlers() as $handler) {
            if (config('laravel_log_enhancer.log_request_details')) {
                $handler->pushProcessor(new WebProcessor);
            }
            $handler->pushProcessor(new RequestDataHandler);
            if (config('laravel_log_enhancer.log_memory_usage')) {
                $handler->pushProcessor(new MemoryUsageProcessor);
            }
            if (config('laravel_log_enhancer.log_git_data')) {
                $handler->pushProcessor(new GitProcessor);
            }
        }
    }
}
