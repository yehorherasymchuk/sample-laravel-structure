<?php

namespace App\Providers;

use App\Services\Companies\Repositories\CompanyRepository;
use App\Services\Companies\Repositories\EloquentCompanyRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    protected array $bindings = [
        CompanyRepository::class => EloquentCompanyRepository::class,
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
