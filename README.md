## Arcsecond Laravel

Laravel 6 integration for the [Arcsecond](https://www.arcsecond.io/) API

## Setup

### Installation
This package utilize Composer, for more information on how to install Composer please read the [Composer Documentation](https://getcomposer.org/doc/00-intro.md).

### Preparation
Open your `composer.json` file and add the following to the require array:
```
"zingeon/arcsecond-laravel": "dev-master"
```

Run Composer to install the new requirement:
```
php composer install
```
## Integration
Integration on Laravel 6.x is straightforward.

### Set the Service Provider and Facade alias
After installing the package, open your Laravel config file located at `config/app.php` and add the following lines.

In the `$providers` array add the following service provider for this package:
```
Zingeon\ArcsecondLaravel\ArcsecondServiceProvider::class,
```
In the `$aliases` array add the following facade for this package:

```
'Arcsecond' => Zingeon\ArcsecondLaravel\Facades\Arcsecond::class,
```

### Set the API key and API URL 

```
<?php

return [

    'arcsecond' => [
        'apiKey' => 'your-arcsecond-api-key',
        'apiUrl' => 'arcsecond-api-url',
    ]

];
```
## Usage

Just use the Laravel facade alias `Arcsecond::`

## Examples

### Get a list of Activities:
```
Arcsecond::activities()->getItems();
```
###  Get specific Activity by id:
```
Arcsecond::activities()->getItemById(67318);
```
You can visit [Arcsecond API documentaton](https://api.arcsecond.io/swagger/)
