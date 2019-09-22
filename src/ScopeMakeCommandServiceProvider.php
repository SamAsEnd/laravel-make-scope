<?php

namespace SamAsEnd\ScopeMake;

use Illuminate\Support\ServiceProvider;

class ScopeMakeCommandServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands();
    }

    protected function registerCommands(): void
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            ScopeMakeCommand::class,
        ]);
    }
}
