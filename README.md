# Monolog Kibana Formatter

Monolog Formatter based on LogstashFormatter for storing Rest api errors

## Install
Edit 'composer.json':

 - add ``"pdffiller/laravel-monolog-kibana": "dev-master@dev"`` to 'require' section
 - add ```"repositories": [{"type": "vcs","url": "git@github.com:pdffiller/laravel-monolog-kibana.git"}]```

Add ``Pdffiller\LaravelMonologKibana\KibanaFormatterServiceProvider::class`` to 'config/app.php' into 'providers' array


# License

[airSlate](https://airslate.com/) and any contributors to this project each grants you a license, under its respective
copyrights, to the Monolog Kibana Formatter and other content in this repository under the
MIT License, see the [LICENSE](LICENSE) file for more information. <br>

`SPDX-License-Identifier: MIT`
