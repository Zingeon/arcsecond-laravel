<?php
/**
 * Part of Arcsecond package
 *
 * Arcsecond Service Provider
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel;

use Illuminate\Support\ServiceProvider;

class ArcsecondServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerArcsecond();
    }

    protected function registerArcsecond() {
        $this->app->singleton('arcsecond', function($app) {
            $config = $app['config']->get('services.arcsecond');
            $apiKey = $config['apiKey'] ?? null;
            $apiUrl = $config['apiUrl'] ?? null;

            return new Arcsecond($apiKey, $apiUrl);
        });

        $this->app->alias('arcsecond', Arcsecond::class);
    }
}
