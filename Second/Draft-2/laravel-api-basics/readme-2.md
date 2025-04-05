*** Learning SANCTUM ***

Step 1 : Start all the server from XAMPP
Step 2 : composer
Step 3 : composer create-project laravel/laravel lara-crud-app
Step 4 : php artisan serve
Step 5 : Change the DB in .env file
Step 6 : Create a DB in localhost/phpmyadmin
Step 7 : php artisan migrate
Step 8 : composer require laravel/breeze
Step 9 : php artisan make:migration create_blogs_table
Step 10 : Edit Blog Migration
Step 11 : php artisan migrate
Step 12 : php artisan make:model Blog
Step 13 : Edit Blog in models folder
Step 14 : php artisan make:controller BlogController --resource
Step 15 : Create a blog folder in the views and add some blade.php files in it.
Step 16 : Modify navigation.blade.php in layout directory
Step 17 : add return statement in the BlogController
Step 18 : Modify web.php in routes
Step 19 : 

php artisan storage:link
php artisan route:list
