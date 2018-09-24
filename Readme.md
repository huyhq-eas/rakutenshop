1. Install PHP
2. Install composer (https://getcomposer.org/)
3. Install laravel
>composer global require "laravel/installer"

4. Create new project
>laravel new shop

5. Install library
>cd shop
>composer install

6. Run project
php artisan serve


*******************************************************
CREATE AND MIGRATE DATABASE
*******************************************************
1. Create folder app/Models

2. Change .env file to point to MySQL database

3. Run to create Eloquent model and migration file
>php artisan make:model Models\Category –m

4. Change migrate source code and run
>php artisan migrate

*******************************************************
TEST DATABASE
*******************************************************
Note:
Tinker is a command line utility that allows you to interact with the Laravel environment. It is a good tool for testing function without the use of the web browser.
>php artisan tinker

NOTE:
In .env, please change [YOUR_RAKUTEN_APP_ID] with your app id, and change [username], [password] for your mysql database
