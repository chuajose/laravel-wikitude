<?php

namespace Jsuarez\Wikitude;

use Illuminate\Support\ServiceProvider;

class WikitudeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //require __DIR__ . '/../vendor/autoload.php';

        $this->publishes([
            __DIR__.'/config/wikitude.php' => config_path('wikitude.php'),
        ]);
        //require __DIR__ . '/../vendor/autoload.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        include __DIR__.'/routes/routes.php';
        $this->app->make('Jsuarez\Wikitude\Http\Controllers\WikitudeController');

       /* $this->app->bind('Wikitude', function ($app) {
            return new Wikitude($app);
        });
*/
       $this->app->singleton(Wikitude::class, function (Container $app) {
            return new Wikitude();
        });

    }
}
