# PHP CRUD Application
Beginner-friendly PHP CRUD application using MySQL

## Features
- **Create**: Add new users with name, email, and phone
- **Read**: Display all users in a table
- **Update**: Edit existing user information
- **Delete**: Remove users with confirmation

## Technologies Used
- PHP
- MySQL
- HTML5
- CSS3
- FontAwesome Icons

## Setup
1. Start XAMPP server
2. Create database `phpCrud`
3. Create `users` table with columns: id, name, email, phone, created_at
4. Establish database connection in `db_connect.php` file
5. Check if the database is connected or not `test_connection.php` file, optional code. Can be skipped
6. Run the application

## Current Status
All CRUD operations (Create, Read, Update, Delete) are implemented and working.

## Files Structure
- `index.php` - Main page with user display and add functionality
- `update.php` - Edit user information
- `delete.php` - Delete user functionality
- `db_connect.php` - Database connection
- `test_connection.php` - Optional connection test
- `style.css` - Application styling