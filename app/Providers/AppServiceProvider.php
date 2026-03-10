<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Custom Pagination
        Paginator::defaultView('vendor.pagination.custom-pagination');

        // Custom Blade Directives
        Blade::if('trashed', fn () => request('trashed') == '1');
    }
}
