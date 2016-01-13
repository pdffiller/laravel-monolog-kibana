<?php

namespace Balandin\Logger;

class KibanaFormatterServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $logPath = storage_path().'/logs/log_'. date('Y-m-d-H') .'.json';
        $handler = new \Monolog\Handler\StreamHandler($logPath);
        $handler->setFormatter(new \Balandin\Logger\KibanaFormatter('php-api'));

        $monolog = \Log::getMonolog();
        $monolog->pushHandler($handler);
    }

    public function register()
    {

    }
}
