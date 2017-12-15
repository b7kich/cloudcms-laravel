<?php 

namespace Idealley\CloudCms;

use Idealley\CloudCmsSDK\ClientBase;
use Illuminate\Support\ServiceProvider;

class CloudCmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/config.php' => config_path('cloudcms.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('cloudcms',function($app)
       	{
            return new ClientBase(  
                config('cloudcms.clientKey'),
                config('cloudcms.clientSecret'),
                config('cloudcms.username'), 
                config('cloudcms.password'),
                config('cloudcms.redirectUri'),
                config('cloudcms.baseUrl'),
                config('cloudcms.deploymentUrl'),
                config('cloudcms.repositoryId'),
                config('cloudcms.branch'),
                config('cloudcms.tokenStoragePath')
            );
        });

        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('CC','Idealley\CloudCms\Facades\CloudCms');
        });

    }
}
