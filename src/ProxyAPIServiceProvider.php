<?php

namespace Skvrd\ProxyAPI;

use Illuminate\Support\ServiceProvider;

class ProxyAPIServiceProvider extends ServiceProvider {

    protected $defer = true;

	public function boot() {
    }
    
    public function register() {
        $this->app->singleton('proxy', function($app) {
            return new Proxy($uri, $uriOptions, $driverOptions);
        });
    }
}