# Laravel Blog
This is application is made for demonstrating features of Laravel, and to help one get started with framework quickly.

## Installation:
1. Download and install XAMPP from https://www.apachefriends.org/download.html (7.1.7 as of this writing)
2. Download and install Composer from https://getcomposer.org/download/ (1.4.2 as of this writing)
3. Install Laravel using Composer via command prompt: `composer global require "laravel/installer"`
4. Ensure `$HOME/.composer/vendor/bin` is added to Path (should already be done by default, but worth checking)
		
## Creating Sample Application:
1. Create an application directory anywhere you like via command prompt: `laravel new <appName>`
2. Import project directory in your favorite IDE and run `php artisan serve` to host the web application
3. Create new user and new database via phpmyadmin, update `.env` file with corresponding details
4. Run `php artisan migrate` and if it fails with error about key being too long, then drop all tables from the database, update `AppServiceProvider.php` as follows, and attempt migration again:
    ```php
    use Illuminate\Support\Facades\Schema;
    ...
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
    ```
5. Run `php artisan make:auth` to generate scaffolding for authentication
6. Update `.env` file to set SMTP details for testing authentication features, using [Gmail's SMTP Settings](https://support.google.com/a/answer/176600?hl=en), and then run `php artisan serve` again to play around.
7. Use `php artisan make:model -mcr <Entity>` to create model, Migration, and Controller that works with the Resource. Then perform migration, update `ModelFactory.php` to add new factory definition, seed database using `php artisan tinker`, and add new routes to `web.php` for each of the methods in Controller to play around.
	
## Basics:
0. Artisan commands and help
1. Auth, Mail
2. Routes
3. Migrations, Eloquent Models, Relationships, DB Seeding, Eager Loading
4. Controllers, Route-Binding, returning JSON
5. Blade Views and Layouts
6. Carbon, CSRF Tokens, Form Validation

## Advanced:
Session Flash, View Composer, Middleware, Events, Localization, Task Scheduling, Queues, APIs

## References:
1. https://laracasts.com/series/laravel-from-scratch-2017
2. https://laravel-news.com/laravel-5-4-key-too-long-error