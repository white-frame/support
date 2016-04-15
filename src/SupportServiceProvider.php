<?php namespace WhiteFrame\Support;

use Illuminate\Support\ServiceProvider;

/**
 * Class SupportServiceProvider
 * @package WhiteFrame\Support
 */
class SupportServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('white-frame.support.helper.manager', function ($app) {
            return new \WhiteFrame\Support\Helper\Manager();
        });
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

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