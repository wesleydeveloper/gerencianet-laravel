# Gerencianet Package for Laravel

## Installation

Via Composer  

```
composer require wesleydeveloper/gerencianet-laravel
```

Add the service provider to config/app.php in the providers array, or if you're using Laravel 6.2, this can be done via the automatic package discovery.

```
Wesleydeveloper\Gerencianet\Laravel\GerencianetServiceProvider::class,
```

If you want you can use the facade. Add the reference in config/app.php to your aliases array.

```
'Gerencianet' => Wesleydeveloper\Gerencianet\Laravel\Facades\Gerencianet::class,
```
## Configuration

Laravel Gerencianet requires connection configuration. To get started, you'll need to publish all vendor assets:

```
php artisan vendor:publish --provider="Wesleydeveloper\Gerencianet\Laravel\GerencianetServiceProvider"
```

You are free to change the configuration file as needed, but the default expected values are below:

  
```
GN_CLIENT_ID=  
GN_CLIENT_SECRET=  
GN_SANDBOX=true
```
