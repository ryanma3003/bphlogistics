<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Filter_galeri;

class FormGaleriServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('back.galeri.form', function($view) {
            $view->with('filter_galeri_list', Filter_galeri::pluck('name', 'id'));
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
