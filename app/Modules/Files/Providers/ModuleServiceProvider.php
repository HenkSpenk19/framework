<?php

namespace App\Modules\Files\Providers;

use Nova\Module\Support\Providers\ModuleServiceProvider as ServiceProvider;


class ModuleServiceProvider extends ServiceProvider
{
    /**
     * The additional provider class names.
     *
     * @var array
     */
    protected $providers = array(
        'App\Modules\Files\Providers\EventServiceProvider',
        'App\Modules\Files\Providers\RouteServiceProvider',
    );


    /**
     * Bootstrap the Application Events.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
        $basePath = realpath(__DIR__ .'/../');

        // Load the Module configuration.
        $path = $basePath .DS .'Config.php';

        $this->loadConfigFrom($path);

        // Bootstrap the Module.
        $path = $basePath .DS .'Bootstrap.php';

        $this->bootstrapFrom($path);
    }

    /**
     * Register the Files module Service Provider.
     *
     * This service provider is a convenient place to register your modules
     * services in the IoC container. If you wish, you may make additional
     * methods or service providers to keep the code more focused and granular.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        //
    }

}
