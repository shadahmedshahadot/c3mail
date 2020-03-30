<?php

namespace Crazycoderscafe\C3mail;

use Illuminate\Support\ServiceProvider;

class SendMailServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'c3mail');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
            __DIR__.'/config/c3mail.php', 'c3mail'
        );
        $this->publishes([
            __DIR__.'/config/c3mail.php' => config_path('c3mail.php'),
        ]);
    }

    public function register()
    {
//        parent::register(); // TODO: Change the autogenerated stub
    }
}