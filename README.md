# Laravel Breaking Bad API Wrapper
API wrapper to connect to Breaking Bad.

## Install
Install the package by adding this to your composer.json file
```
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/kwaight/breaking-bad-api-service.git"
        }
    ],
    ...
    "require": {
        ...
        "kwaight/breaking-bad-api-service": "dev-master"
    },

```
 
Optionally load the config
```
php artisan vendor:publish --tag=breaking-bad-api-config
```


