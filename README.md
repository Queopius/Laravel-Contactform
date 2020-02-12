# Laravel Contact Form

[![Latest Stable Version](https://poser.pugx.org/queopius/laravel-contactform/v/stable)](https://packagist.org/packages/queopius/laravel-contactform)
[![Total Downloads](https://poser.pugx.org/queopius/laravel-contactform/downloads)](https://packagist.org/packages/queopius/laravel-contactform)
[![License](https://poser.pugx.org/queopius/laravel-contactform/license)](https://packagist.org/packages/queopius/laravel-contactform)

A contact form package to facilitate the life of the web developer.

This package is a PHP package built for Laravel 5.* & 6.*.

## ABOUT

- [x] Send e-mail with the verification token
- [x] Set the name, email and message as validated
- [x] Relaunch the process anytime

## INSTALLATION

This project can be installed via [Composer](http://getcomposer.org). To get
the latest version of Laravel ContactForm, add the following line to the
require block of your composer.json file:

    {
        "require": {
            "queopius/laravel-contactform": "v1.0"
        }

    }

You'll then need to run `composer install` or `composer update` to download the
package and have the autoloader updated.

Or run the following command:

    composer require queopius/laravel-contactform

### Add the Service Provider up to Laravel 5.4, as of laravel 5.5 the Provider is added automatically.

Once Larvel ContactForm is installed, you need to register the service provider in `config/app.php`.
Make sure to add the following line **above** the `RouteServiceProvider`.

```PHP
Queopius\LaravelContactform\ContactFormServiceProvider::class,
```

Publish the package config file by running the following command:

```
php artisan vendor:publish
```

## CONFIGURATION

The model representing the `Contact` into the folder Models/.

### Migration

To run the migrations from this package use the following command:

```
php artisan migrate --path="/vendor/queopius/laravel-contactform/src/database/migrations"
```

To customize the migration, publish it with the following command:

```
php artisan vendor:publish --provider="Queopius\LaravelContactform\ContactformServiceProvider" --tag="migrations"
```

## E-MAIL

This package provides a method to send an e-mail with a verification token.

By default the package will use the `send_email_to` value defined into the
`config/contact.php` file:

```php
    'send_email_to' => 'queopius@gmail.com', //Put your personal or company email here

```

If you want to override the value, simply set the `$send_email_to` parameter.

Refer to the Laravel [documentation](https://laravel.com/docs/) for the
proper e-mail component configuration.


### E-mail View

The package allow you to use both traditional blade view files and markdown.

If you want to customize the e-mail views, run the following command to publish
them and edit them to your needs:

```
php artisan vendor:publish --provider="Queopius\LaravelContactform\ContactformServiceProvider" --tag="views"
```

The view will be available in the `resources/views/vendor/laravel-contactform/` directory.

### View

By default the `contact.blade.php` view will be loaded.

To customize the view, publish it with the following command:

```
php artisan vendor:publish --provider="Queopius\LaravelContactform\ContactformServiceProvider" --tag="views"
```

### Routes

By default this packages ships with two routes.

To customize the routes into the routes/web.php, publish it with the following command:

```
php artisan vendor:publish --provider="Queopius\LaravelContactform\ContactformServiceProvider" --tag="routes"
```

## GRATEFULNESS

Laravel Framework - Taylor Otwell

## CONTRIBUTE

Feel free to comment, contribute and help.

## LICENSE

Laravel ContactForm is licensed under [The MIT License (MIT)](LICENSE).
