<?php

namespace Bondstein\Crud;

use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register your package's services here
    }

    public function boot()
    {
        // Load routes, views, migrations, etc. here
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/Views', 'BondsteinCrud');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        // Include migrations if needed: $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');
    }
}
