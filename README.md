# Logger
Monolog Formatter based on LogstashFormatter for storing Rest api errors

## Install
Edit 'composer.json':

 - add ``"pdffiller/laravel-monolog-kibana": "dev-master@dev"`` to 'require' section
 - add ```"repositories": [{"type": "vcs","url": "git@github.com:pdffiller/laravel-monolog-kibana.git"}]```

Add ``Pdffiller\LaravelMonologKibana\KibanaFormatterServiceProvider::class`` to 'config/app.php' into 'providers' array
