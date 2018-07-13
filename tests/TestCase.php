<?php
/**
 * Created by PhpStorm.
 * User: nitishkumar
 * Date: 13/7/18
 * Time: 3:58 PM
 */

namespace AwesomePeople\LaravelLogEnhancer\Test;

use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return ['AwesomePeople\LaravelLogEnhancer\LaravelLogEnhancerServiceProvider'];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('logging.channels.stack.tap', [\AwesomePeople\LaravelLogEnhancer\LogEnhancer::class]);
    }
}