<div align="center"> 
    <a href="https://www.php.net">
        <img
            alt="PHP"
            src="https://www.php.net/images/logos/new-php-logo.svg"
            width="150">
    </a>
</div>

# 🎓 College Placement Portal

A web-based platform developed using **PHP, MySQL, HTML, CSS, JavaScript, and Bootstrap** to streamline and manage college placement processes. The system supports separate login portals for **Admins** (Placement Officers) and **Students**, enabling efficient management of placement drives, registrations, and communication.

[![Push](https://github.com/php/php-src/actions/workflows/push.yml/badge.svg)](https://github.com/php/php-src/actions/workflows/push.yml)
[![Fuzzing Status](https://oss-fuzz-build-logs.storage.googleapis.com/badges/php.svg)](https://bugs.chromium.org/p/oss-fuzz/issues/list?sort=-opened&can=1&q=proj:php)

---

## 🚀 Project Overview

College Placement Portal is a web application developed using PHP, MySQL, HTML, CSS, JavaScript, and Bootstrap to efficiently manage campus placement activities. The system provides separate login portals for Admin (placement officers) and Students to facilitate placement drives, registrations, and communication.

---

## ✨ Features

- 🔐 **User Authentication**: Separate login systems for Admin and Students.
- 🛠️ **Admin Panel**:
  - Manage student profiles
  - Add/edit/delete placement drives
  - Company details management
- 📋 **Student Dashboard**:
  - View and apply for placement drives
  - Update profile details
- 📁 **Placement Management**: Admins can add and manage placement records.
- 📱 **Responsive UI**: Built using Bootstrap for desktop and mobile compatibility.
- 📞 **Contact Page**: Students can reach out to placement officers directly.

---

## 🛠️ Technologies Used

| Layer        | Technologies                            |
|--------------|------------------------------------------|
| Backend      | PHP 7.x / 8.x                            |
| Database     | MySQL (managed through phpMyAdmin)       |
| Frontend     | HTML5, CSS3, Bootstrap 4, JavaScript, jQuery |
| Server       | XAMPP (Apache + MySQL)                   |
| Version Control | Git & GitHub                          |

---

## ⚙️ Installation & Setup Instructions

### 📋 Prerequisites

- Install **XAMPP** or any PHP-MySQL server stack
- Download or clone this repository

### 🧾 Steps

1. Copy the project folder to your XAMPP `htdocs` directory, for example:
C:\xampp\htdocs\College-Placement-Portal
2. Start **Apache** and **MySQL** from the XAMPP Control Panel.
3. Open your browser and go to:
http://localhost/phpmyadmin
4. Create a new database, e.g., `placement_portal`.
5. Import the SQL file provided (typically `placement_portal.sql`) into your new database.
6. Update your database connection credentials in the project’s `db.php` file:
```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placement_portal";
7.Launch the project in your browser:
bash
Copy
Edit
http://localhost/College-Placement-Portal/index.php

### Usage Notes
Admin and student login credentials are stored in the database.
Admin Features:
Manage placement drives
Add/view students
Manage companies

Student Features:
Register and login
Apply for placement drives
Edit personal details

📄  License
This project is licensed under the MIT License.
See the LICENSE file for more details.
