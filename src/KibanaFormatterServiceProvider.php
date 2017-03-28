<?php

namespace PDFfiller\LaravelMonologKibana;

use Illuminate\Log\Writer;
use Illuminate\Support\ServiceProvider;
use Log;
use PDFfiller\Monolog\Handler\LogFileHandler;

class KibanaFormatterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $dir = config('kibana-logger.log-path');
        $logLevel = config('app.log_level', 'debug');
        $applicationName = config('kibana-logger.application-name', 'php-api');

        $handler = new LogFileHandler($applicationName, $dir, $logLevel);
        $handler->setFormatter(new KibanaFormatter($applicationName));

        $monolog = Log::getMonolog();
        $monolog->pushHandler($handler);

        $new_log = new Writer($monolog, Log::getEventDispatcher());
        Log::swap($new_log);
    }

    public function register()
    {

    }
}
