<?php

namespace Cas\Pkgdev;

use Illuminate\Support\ServiceProvider;

class PkgdevServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Cas\Pkgdev\TestController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->loadViewsFrom(__DIR__.'/views' , 'Pkgdev');
        $this->publishes([
//            __DIR__.'/../resources/views' => resource_path('views/test'),
            __DIR__.'/views' => resource_path('views'),
        ]);

        //  publishing assets
        //  $this->publishes([
        //        __DIR__.'/../public' => public_path('vendor/[pkg-name]'),
        //    ], 'public');
        //   php artisan vendor:publish --tag=public --force

        //   publishing config files
        //   $this->publishes([
        //        __DIR__.'/../config/package.php' => config_path('package.php')
        //    ], 'courier-config');

        //    publishing migration files
        //    $this->publishes([
        //        __DIR__.'/../database/migrations/' => database_path('migrations')
        //    ], 'courier-migrations');
        //    use php artisan vendor:publish for publishing every file
        //    or use tag for publishing specific
        //    php artisan vendor:publish --tag=courier-config
    }
}
