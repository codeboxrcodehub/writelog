<?php

namespace Dipudey\Writelog;

use Illuminate\Support\ServiceProvider;

class WriteLogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__."/../config/writelog.php" => config_path("writelog.php")
        ]);
    }

    /**
     * Register application services
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__."/../config/writelog.php", "writelog");

        $this->app->bind("writelog",function() {
            return new WriteLog();
        });
    }
}
