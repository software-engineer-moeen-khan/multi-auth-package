<?php

namespace Moeen\LaravelMultiAuth;

use Illuminate\Support\ServiceProvider;

class LaravelMultiAuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerInstallCommand();
        $this->registerAuthSettingsInstallCommand();
        $this->registerAuthFilesInstallCommand();
        $this->registerAuthModelInstallCommand();
        $this->registerAuthViewsInstallCommand();
        //$this->registerInstallMiddlewareCommand();
    }

    /**
     * Register the laravel-multi-auth:install command.
     */
    private function registerInstallCommand()
    {
        $this->app->singleton('command.Moeen.laravel-multi-auth.install', function ($app) {
            return $app['Moeen\LaravelMultiAuth\Commands\MultiAuthInstallCommand'];
        });

        $this->commands('command.Moeen.laravel-multi-auth.install');
    }

    /**
     * Register the laravel-multi-auth:install command.
     */
    private function registerAuthSettingsInstallCommand()
    {
        $this->app->singleton('command.Moeen.laravel-multi-auth.settings', function ($app) {
            return $app['Moeen\LaravelMultiAuth\Commands\AuthSettingsInstallCommand'];
        });

        $this->commands('command.Moeen.laravel-multi-auth.settings');
    }

    /**
     * Register the laravel-multi-auth:install command.
     */
    private function registerAuthFilesInstallCommand()
    {
        $this->app->singleton('command.Moeen.laravel-multi-auth.files', function ($app) {
            return $app['Moeen\LaravelMultiAuth\Commands\AuthFilesInstallCommand'];
        });

        $this->commands('command.Moeen.laravel-multi-auth.files');
    }

    /**
     * Register the laravel-multi-auth:install command.
     */
    private function registerAuthModelInstallCommand()
    {
        $this->app->singleton('command.Moeen.laravel-multi-auth.model', function ($app) {
            return $app['Moeen\LaravelMultiAuth\Commands\AuthModelInstallCommand'];
        });

        $this->commands('command.Moeen.laravel-multi-auth.model');
    }

    /**
     * Register the laravel-multi-auth:install command.
     */
    private function registerAuthViewsInstallCommand()
    {
        $this->app->singleton('command.Moeen.laravel-multi-auth.views', function ($app) {
            return $app['Moeen\LaravelMultiAuth\Commands\AuthViewsInstallCommand'];
        });

        $this->commands('command.Moeen.laravel-multi-auth.views');
    }
}