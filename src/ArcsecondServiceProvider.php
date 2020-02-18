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
        $this->registerConfig();
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

    protected function registerConfig() {
        $this->app->singleton('arcsecond.config', function ($app) {
            return $app['arcsecond']->getConfig();
        });

        $this->app->alias('arcsecond.config', Config::class);
        $this->app->alias('arcsecond.config', ConfigInterface::class);
    }
}
