# Logger
Monolog Formatter based on LogstashFormatter for storing Rest api errors

## Install
Edit 'composer.json':

 - add ``"pdffiller/laravel-monolog-kibana": "dev-master@dev"`` to 'require' section

Add ``Pdffiller\LaravelMonologKibana\KibanaFormatterServiceProvider::class`` to 'config/app.php' into 'providers' array
