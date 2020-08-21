<?php


namespace Wesleydeveloper\Gerencianet\Laravel;


use Illuminate\Support\ServiceProvider;

class GerencianetServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/gerencianet.php' => config_path('gerencianet.php'),
            ], 'config');
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Wesleydeveloper\Gerencianet\Laravel\GerencianetManager', function () {
            return new GerencianetManager([
                'client_id' => config('gerencianet.client_id'),
                'client_secret' => config('gerencianet.client_secret'),
                'sandbox' => config('gerencianet.sandbox'),
                'timeout' => config('gerencianet.timeout'),
            ]);
        });
    }
}
