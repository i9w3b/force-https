<?php

namespace I9W3b\ForceHttps;

use Illuminate\Support\ServiceProvider;
use I9W3b\ForceHttps\Http\Middleware\ForceHttps;
use Illuminate\Routing\Router;

class ForceHttpsServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->registerConfig();
        $router->aliasMiddleware('https', ForceHttps::class);

        if (config('forcehttps.force_https')){
            url()->forceScheme("https");
            $this->app['request']->server->set('HTTPS', true);
        }
    }

    public function register()
    {
        //
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
          __DIR__ . '/../config/config.php' => config_path('forcehttps.php'),
      ], 'config');
        $this->mergeConfigFrom(
          __DIR__ . '/../config/config.php',
          'forcehttps'
      );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
