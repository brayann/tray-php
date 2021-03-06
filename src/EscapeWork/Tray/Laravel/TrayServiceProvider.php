<?php namespace EscapeWork\Tray\Laravel;

use Illuminate\Support\ServiceProvider;
use EscapeWork\Tray\Config;

class TrayServiceProvider extends ServiceProvider
{

    public function register()
    {
        Config::$token_account = $this->app['config']['tray.token_account'];
        Config::$environment   = $this->app['config']['tray.environment'];
    }
}