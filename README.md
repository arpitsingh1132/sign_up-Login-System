🔐 SignUp/Login System using PHP & MySQL

A secure and responsive SignUp/Login system built using PHP, MySQL, HTML, CSS, and JavaScript with particle animations and a modern dark teal-themed UI. It includes essential features like password hashing, session handling, and error validation.



🚀 Features

✅ User registration with unique email and username

✅ Secure login using email or username

✅ Passwords stored using hashing for enhanced security

✅ Session-based user authentication

✅ Responsive, modern UI with animated teal background

✅ Error handling and validation

✅ MySQL database integration



🛠️ Tech Stack

Frontend: HTML, CSS, JavaScript (canvas animation)

Backend: PHP

Database: MySQL



📁 Folder Structure

📦 SignUp-Login-System
├── login.html
├── signUp.html
├── login.php
├── signUp.php
├── logout.php
├── dashboard.php
├── style.css
└── db.sql


🗃️ Database Setup

Open phpMyAdmin or any MySQL client.

Import the db.sql file to create the database and users table:

sql
Copy
Edit
CREATE DATABASE IF NOT EXISTS user_database;
USE user_database;

CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);



🧪 How to Run Locally

Install XAMPP or Laragon.

Place all files in htdocs/your-folder-name (for XAMPP) or the Laragon www directory.

Start Apache and MySQL.

Access http://localhost/your-folder-name/signUp.html to register.

Login using login.html.




📌 Notes

Use relative paths instead of absolute ones in HTML for cross-platform compatibility.

Ensure session_start() is called in all PHP files managing session state.

Use HTTPS in production for secure data transmission.
