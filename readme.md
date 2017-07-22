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
4. Run `php artisan migrate` and if it fails with error about key being too long, update `AppServiceProvider.php` as follows and perform migration again:
    ```php
    use Illuminate\Support\Facades\Schema;
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
    ```
5. Run `php artisan make:auth` to generate scaffolding for authentication
6. 
	
## Basics:
0. Artisan commands and help
1. Auth, Mail
2. Routes
3. Blade Views and Layouts, SASS
4. Eloquent Models, Migrations
5. Controllers, Route-Binding, returning JSON
6. CSRF Tokens, Form Validation, Carbon, DB Seeding

## Advanced:
Session Flash, View Composer, Middleware, Events, Localization, Task Scheduling, Queues, APIs

	
## References:
1. https://laracasts.com/series/laravel-from-scratch-2017
2. https://laravel-news.com/laravel-5-4-key-too-long-error
3. 