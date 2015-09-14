Cache Urls

- Very alpha stages. Not unstable but i need to write tests for it.
- If you think it's a good starting point for you, take it.


###Installation
Add to composer.json 

```php
"sid/laravel-simplecache":"dev-master" 
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

'cacheafter' => \Sid\SimpleCache\AfterCacheMiddleware::class,

'cachebefore' => \Sid\SimpleCache\BeforeCacheMiddleware::class,


##Todo
- Test. Tests. Tests.
- Expanded documentation on adding roles and permissions
- Management controllers and views

# Contributing

Contributions are **welcome** and will be fully **credited**.