# Logger
Monolog Formatter based on LogstashFormatter for storing Rest api errors

## Install
Edit 'composer.json':

 - add ``"balandin/logger": "dev-master"`` to 'require' section

 - add ``{ "type": "vcs", "url": "git@gitlab.pdffiller.com:balandin/logger.git" }`` to 'repositories' section

Add ``Balandin\Logger\KibanaFormatterServiceProvider::class`` to 'config/app.php' into 'providers' array
