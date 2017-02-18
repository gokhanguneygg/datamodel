<?php
namespace ModelCourier;
use Illuminate\Support\ServiceProvider;
class ModelCourierProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(){

    }
    public function boot()
    {
    	$this->publishes([
            __DIR__.'/Publish/Articles.php' => app_path('Http/DataModels/Articles.php')
        ], 'dataModels');
        $this->publishes([
            __DIR__.'/Publish/Article.php' => app_path('Http/Models/Article.php')
        ], 'models');
        $this->publishes([
            __DIR__.'/Publish/migrations' => database_path('migrations')
        ], 'migrations');
    }
}
