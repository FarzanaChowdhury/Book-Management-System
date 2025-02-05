## About Project

This is a Book Management System with different types of users, namely, User, Author, Admin and Super Admin.
The list of books can be filtered by name, category and/or author name. 
Users can view book details, authors can upload and manage their own books. Admins and Super admins can upload and manage all books.

Technologies used: PHP, Laravel Sail, Docker, MySQL, PhpMyAdmin, Bootstrap

## Installation

-> Step 1: Clone the database and got to the correct folder
git clone https://github.com/FarzanaChowdhury/Book-Management-System.git
cd book-management

-> Step 2: Copy the environment file  
cp .env.example .env  

-> Step 3: Install dependencies  
composer install  

-> Step 4: Install Sail (only if not already installed)  
composer require laravel/sail --dev  

-> Step 5: Generate application key  
./vendor/bin/sail artisan key:generate  

-> Step 6: Start the containers  
./vendor/bin/sail up -d  

-> Step 7: Run migrations  
./vendor/bin/sail artisan migrate  

-> Step 8: Seed the database (if you don't manually import the books table from database/tables)  
./vendor/bin/sail artisan db:seed --class=BookSeeder  

-> Step 9: Install front-end dependencies  
./vendor/bin/sail npm install  

-> Step 10: Compile assets  
./vendor/bin/sail npm run dev  


### Additional Instructions
-Access the application from : http://localhost/login

-Access Database from: http://localhost:8080

-PhpMyAdmin username: root Password: root

-Database Name: bookdb

Tables used: books, users

## Credentials
Ways to create users:
1. Register and create different users
2. Use tinker or DatabaseSeeder to create users
3. Import the tables from database/tables inside the 'bookdb' of PhpMyAdmin.
   In this case, use the following credentials


###
**Role**: Super Admin

Email: superadmin@example.com

Password : password

###
**Role**: Admin

Email: admin@example.com

Password : password

###
**Role**: Author

Email: author@example.com

Password : password

###
**Role**: User

Email: user@example.com

Password : password

