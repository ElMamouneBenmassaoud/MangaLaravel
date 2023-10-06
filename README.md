
title: BD Mangas
publishDate: 2019-12-01 00:00:00
![mangas](https://github.com/ElMamouneBenmassaoud/mangaLaravel/assets/101842968/6ac64535-b908-4382-961b-896e2bf1b4b0)---
description: A 2-page webapp that allows you to catalog your favorite mangas using Laravel
tags:
  - Laravel
  - Blade
  - MySQL
  - PHP
---

### Mangas Distribution

##### Brief description

We have designed a pleasant and easy to use visual webapp for users with all our functionalities. Our application is not
responsive and is designed for DESKTOP devices only.

##### Building and launch

- cp .env.example .env
- composer install
- php artisan key:generate
- php artisan migrate --seed
- php artisan serve
- Your DB needs to be named 'mangas'

##### Features

- To consult each manga from the database
- See every character from a serie by clicking on her title
- Create a new serie

##### Remarks

The description of a manga is only displayed when there is one.

##### Code

- Using a MVC pattern
- Using Laravel
- Using AJAX requests
- Using my own API with json
- Using migrations to create your own database

##### Authors

> El Mamoune Benmassaoud

