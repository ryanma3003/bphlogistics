<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Blog_categories;
use App\Blog_post;

class FormBlog_postServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('back.blog.form', function($view) {
            $view->with('blog_categories_list', Blog_categories::pluck('name', 'id'));
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
