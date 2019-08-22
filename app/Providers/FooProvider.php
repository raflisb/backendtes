<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FooProvider extends ServiceProvider
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
        //
        $this->app->bind('value', function() {
            return new \App\MyClass\Foo;
          });
    }
}
