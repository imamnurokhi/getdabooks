<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## How-to-run the App
Important :
- **Make sure you have installed XAMPP, Composer, PHP Version 8.+ and checkout this repo to your local PC**
- **Please run XAMPP > Apache and XAMPP > MySQL**

![image](https://user-images.githubusercontent.com/101321842/194964607-8fa3a622-74a6-4478-9e5f-d5a87b178e6f.png)

1. **Open terminal and set the path to your local (example : cd \xampp\htdocs\getdabooks)**

2. Run this command: 
- **php artisan migrate:fresh --seed**
- **php artisan serve**

3. Open the link on your browser (or http://127.0.0.1:8000)

![image](https://user-images.githubusercontent.com/101321842/194964399-9fa49d39-6f4d-432e-9f48-a1911a385b83.png)
![image](https://user-images.githubusercontent.com/101321842/194964874-e10eb383-5f3c-400c-8d30-da3ae77779d8.png)

4. Find books on search box
5. Click borrow, if you want to record to the database order

## API

For checking the order records, you can access : http://127.0.0.1:8000/api

![image](https://user-images.githubusercontent.com/101321842/194965490-a84e58cd-ae89-481d-99af-ff22724b170b.png)


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.
