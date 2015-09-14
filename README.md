[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sidis405/laravel-simplecache-middleware/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sidis405/laravel-simplecache-middleware/?branch=master) [![Code Coverage](https://scrutinizer-ci.com/g/sidis405/laravel-simplecache-middleware/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/sidis405/laravel-simplecache-middleware/?branch=master) [![Build Status](https://scrutinizer-ci.com/g/sidis405/laravel-simplecache-middleware/badges/build.png?b=master)](https://scrutinizer-ci.com/g/sidis405/laravel-simplecache-middleware/build-status/master)

Cache Urls

- Very alpha stages. Not unstable but i need to write tests for it.
- If you think it's a good starting point for you, take it.


###Installation
Add to composer.json 

```php
"sid/laravel-simplecache-middleware":"dev-master" 
```


Register the service provider by adding in the provider section in config/app.php

```php
'providers' => [
    ...
    Sid\SimpleCache\SimpleCacheServiceProvider::class
    ...
```

Just in case

```php
composer dump-autoload
```

Publish the migration and the config file

```php
php artisan vendor:publish
```

Add to Kernel.php

```php
'cacheafter' => \Sid\SimpleCache\AfterCacheMiddleware::class,
'cachebefore' => \Sid\SimpleCache\BeforeCacheMiddleware::class,
```

##Todo
- Test. Tests. Tests.

# Contributing

Contributions are **welcome** and will be fully **credited**.