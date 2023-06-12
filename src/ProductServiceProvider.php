<?php

namespace src;
use Illuminate\Support\ServiceProvider;
class ProductServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('product', function () {
            return new Product('book');
        });
    }
}

