<?php
/**
 * Laravel 5 Hospitality
 *
 * @author   Alex Scott <alex.scott@takeawaytown.co.uk>
 * @license  http://opensource.org/licenses/MIT
 * @package  takeawaytown/hospitality
 */

namespace TakeawayTown\Hospitality;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class HospitalityServiceProvider extends ServiceProvider
{
    /**
     * This provider is deferred and should be lazy loaded.
     *
     * @var boolean
     */
    protected $defer = true;

    /**
     * Register IoC bindings.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../src/config/config.php', 'hospitality');
    }

    /**
     * Boot the package.
     */
    public function boot()
    {
        $this->publishes([
                __DIR__.'/../src/config/config.php' => config_path('hospitality.php'),
        ], 'config');

        $this->mergeConfigFrom(__DIR__.'/../src/config/config.php', 'hospitality');


            $this->publishes([

            ], 'migrations');

    }
}
