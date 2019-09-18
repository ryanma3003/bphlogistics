<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Blog_post;
use App\Blog_tag;

class FormBlog_post_tagServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('back.post_tag.form', function($view) {
            $view->with('blog_tag_list', Blog_tag::pluck('name', 'id'));
            $view->with('blog_post_list', Blog_post::pluck('title', 'id'));
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
