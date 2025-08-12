<div align="center">
    <a href="https://www.php.net">
        <img
            alt="PHP"
            src="https://www.php.net/images/logos/new-php-logo.svg"
            width="150">
    </a>
</div>

# The PHP Interpreter

PHP is a popular general-purpose scripting language that is especially suited to
web development. Fast, flexible and pragmatic, PHP powers everything from your
blog to the most popular websites in the world. PHP is distributed under the
[PHP License v3.01](LICENSE).

[![Push](https://github.com/php/php-src/actions/workflows/push.yml/badge.svg)](https://github.com/php/php-src/actions/workflows/push.yml)
[![Fuzzing Status](https://oss-fuzz-build-logs.storage.googleapis.com/badges/php.svg)](https://bugs.chromium.org/p/oss-fuzz/issues/list?sort=-opened&can=1&q=proj:php)

# College Placement Portal

Project Overview
College Placement Portal is a web application developed using PHP, MySQL, HTML, CSS, JavaScript, and Bootstrap to efficiently manage campus placement activities. The system provides separate login portals for Admin (placement officers) and Students to facilitate placement drives, registrations, and communication.

# Features

User Authentication: Separate login systems for Admin and Students.
Admin Panel: Manage student profiles, placement drives, and company details.
Student Dashboard: View and apply for placement drives.
Placement Management: Admin can add and manage placement records.
Responsive UI: Designed using Bootstrap for mobile and desktop compatibility.
Contact Page: Students can easily reach out to placement officers.

# Technologies Used

Backend: PHP 7.x / 8.x
Database: MySQL (managed through phpMyAdmin)
Frontend: HTML5, CSS3, Bootstrap 4, JavaScript, jQuery
Server Environment: XAMPP (Apache + MySQL)
Version Control: Git and GitHub

# Installation & Setup Instructions
# Prerequisites

Install XAMPP or any PHP-MySQL server stack.
Clone or download this repository.

# Steps

Copy the project folder to the XAMPP htdocs directory, e.g.,
C:\xampp\htdocs\College-Placement-Portal
Start Apache and MySQL from the XAMPP Control Panel.
Open http://localhost/phpmyadmin in your browser.
Create a new database named (for example) placement_portal.
Import the provided SQL file (if included in the project folder).
Update database credentials in your configuration file (like db.php) if necessary.
Open the project in your browser:
http://localhost/College-Placement-Portal/index.php
Login as Admin or Student to access the portal.

# Usage Notes
Admin and student credentials are stored in the database.
Admin can manage placement drives and student info.
Students can register, login, and apply for placement drives.

# License

This project is licensed under the MIT License. See the LICENSE file for details.

