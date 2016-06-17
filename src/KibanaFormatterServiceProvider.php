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
        $dir              = config('kibana-logger.log-path', storage_path('logs'));
        $fileNameTemplate = config('kibana-logger.log-file-name-template', 'log_'. date('Y-m-d-H') .'.json');
        $logLevel         = config('app.log_level', 'debug');
        $applicationName  = config('kibana-logger.application-name', 'php-api');

        $logPath = $dir.DIRECTORY_SEPARATOR.$fileNameTemplate;

        $handler = new StreamHandler($logPath, $logLevel);
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
