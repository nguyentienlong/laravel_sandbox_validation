<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when('App\Http\Controllers\AccountingController')
            ->needs('App\Repositories\ReportRepositoryInterface')
            ->give('App\Repositories\AccountingReportRepository');

        $this->app->when('App\Http\Controllers\HrController')
            ->needs('App\Repositories\ReportRepositoryInterface')
            ->give('App\Repositories\HrReportRepository');
    }
}
