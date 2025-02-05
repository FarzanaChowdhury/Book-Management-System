## About Project

This is a Book Management System with different types of users, namely, User, Author, Admin and Super Admin.
The list of books can be filtered by name, category and/or author name. 
Users can view book details, authors can upload and manage their own books. Admins and Super admins can upload and manage all books.

Technologies used: PHP, Laravel Sail, Docker, MySQL, PhpMyAdmin, Bootstrap

## Installation

-> git clone https://github.com/FarzanaChowdhury/Book-Management-System.git

-> cd book-management

-> cp .env.example .env

-> composer require laravel/sail --dev

-> ./vendor/bin/sail up -d

-> ./vendor/bin/sail artisan migrate

-> ./vendor/bin/sail npm install

-> ./vendor/bin/sail npm run dev


### Additional Instructions
-Access the application from : http://localhost/login

-Access Database from: http://localhost:8080

-PhpMyAdmin username: root Password: root

-Database Name: bookdb

Tables used: books, users

## Credentials
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

