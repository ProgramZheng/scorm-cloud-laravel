# scorm-cloud-laravel
## install
Install the package through Composer.
```
$ composer require programzheng/scorm-cloud-laravel
```
If you're not using Laravel >=5.5, add the ServiceProvider to the providers array in config/app.php
```
ProgramZheng\ScormCloudLaravel\ScormCloudLaravelProvider
```
Copy the package config to your local config with the publish command
```
php artisan vendor:publish --provider=ProgramZheng\ScormCloudLaravel\ScormCloudLaravelProvider
```
