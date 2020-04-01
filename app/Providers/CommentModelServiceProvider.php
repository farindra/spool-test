<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CommentModelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \App\Comment::observe(\App\Observers\CommentObserver::class);
    }
}
