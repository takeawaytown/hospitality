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
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'hospitality');
    }

    /**
     * Boot the package.
     */
    public function boot()
    {
        $this->publishes([
                __DIR__.'/../config/config.php' => config_path('hospitality.php'),
        ], 'config');

        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'hospitality');


            $this->publishes([
                // __DIR__.'/../migrations/hopitality_setup_users_table.php.stub' => database_path("/migrations/{$timestamp}_hopitality_setup_users_table.php"),
                // __DIR__.'/../migrations/hopitality_create_restaurants_table.php.stub' => database_path("/migrations/{$timestamp}_hopitality_create_restaurants_table.php"),
                // __DIR__.'/../migrations/hopitality_create_teams_table.php.stub' => database_path("/migrations/{$timestamp}_hopitality_create_teams_table.php"),
                // __DIR__.'/../migrations/hopitality_create_restaurant_user_table.php.stub' => database_path("/migrations/{$timestamp}_hopitality_create_restaurant_user_table.php"),
                // __DIR__.'/../migrations/hopitality_create_team_user_table.php.stub' => database_path("/migrations/{$timestamp}_hopitality_create_team_user_table.php"),
                // __DIR__.'/../migrations/hopitality_create_invites_table.php.stub' => database_path("/migrations/{$timestamp}_hopitality_create_invites_table.php"),
            ], 'migrations');

    }
}
