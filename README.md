# MVP Bootstrap Project

## Overview
A minimal PHP MVC structure with Bootstrap, login, registration, and profile dashboard.

## Features
- Secure login and registration using password hashing
- Profile page accessible only after login
- Clean structure with controllers, models, and views
- Bootstrap UI for styling
- Simple routing using .htaccess

## Setup
1. Import `mvp_db.sql` into your MySQL.
2. Set DB credentials in `/config/config.php`.
3. Access `/login` to begin.

## Routes
- `/login` - Login page
- `/register` - Registration form
- `/profile` - Dashboard after login
- `/logout` - End session
