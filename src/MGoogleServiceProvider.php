<?php namespace MGoogleLaravel;

use Illuminate\Support\ServiceProvider;

class MGoogleServiceProvider extends ServiceProvider{

    protected $defer = false;

    public function register(){

       $this->app->alias('MGoogleAPI', 'MGoogleLaravel\MGAPI');
    }

    public function provides(){
        return [
            'MGoogleLaravel\MGAPI'
        ];
    }

    public function boot(){
        $this->publishes([
            __DIR__.'/../config.php' => config_path('mgoogle.php'),
        ]);
    }
}
