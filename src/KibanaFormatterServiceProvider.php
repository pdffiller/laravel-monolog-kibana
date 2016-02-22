<?php

namespace Pdffiller\LaravelMonologKibana;

use Monolog\Handler\StreamHandler;
use Illuminate\Support\ServiceProvider;
use Illuminate\Log\Writer;
use Log;

class KibanaFormatterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $logPath = storage_path().'/logs/log_'. date('Y-m-d-H') .'.json';
        $handler = new StreamHandler($logPath);
        $handler->setFormatter(new KibanaFormatter('php-api'));

        $monolog = Log::getMonolog();
        $monolog->pushHandler($handler);

        $new_log = new Writer($monolog, Log::getEventDispatcher());
        Log::swap($new_log);
    }

    public function register()
    {

    }
}
