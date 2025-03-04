*** Steps From Starting ***
1. Create Laravel Project - composer create-project laravel/laravel project-name
2. Start Server - php artisan serve
3. Create Model along with the Migration file - php artisan make:model User -m
4. Now Update Migrations in the database/migrations
--  $table->string('name');     
    $table->string('pass');  --
5. Now Make Model in the models file in app/Models/User
--  use HasFactory;
    protected $table = "user";
    protected $primariKey = "id";
    protected $fillable = ['name', 'pass'];  --
6. Now Create the controller for the api - php artisan make:controller app/Http/Controller/Api/UserController --api
7. Now Create a Request file - php artisan make:request UserRequest
8. Now Create rules in app/Http/Requests/UserRequest.php 
--  'name' => ['required'],
    'pass' => ['required']  --
9. Change the Request in Controller to UserRequest
10. Install Api - php artisan install:api
11. 


1. Create laravel Project
- composer create-project laravel/laravel project-name
2. Start Server
- php artisan serve
3. About Server
- php artisan about
4. Show Database
- php artisan config:show database  
5. Install Libraries
- php artisan install:api
6. Clear Cache
- php artisan route:cache
7. Another Command to clear Cache
- php artisan optimize:clear
8. Create Controller
- php artisan make:controller UserController
9. Squash all the migrations into a single SQL file
- php artisan schema:dump
- php artisan schema:dump --prune (This will remove all the previous migrations)
10. Make Migration
- php artisan make:migration create_%tablename%_table
11. Apply Migration
- php artisan migrate


Step 1 : Migration - Create Tables in DB
Step 2 : Migrate - To make changes in DB
Step 3 : Create Controller
Step 4 : Create Models
Step 5 : Create Routes

Create Controler
Create Models
Create Migrations
Create Routes
Create API
Routing Commands
Cache Clear Commands
Route List Fetching