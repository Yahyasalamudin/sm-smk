<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

/*
|--------------------------------------------------------------------------
| Breadcrumbs Routes
|--------------------------------------------------------------------------
|
| This file is used to define breadcrumbs for various routes in your
| Laravel application. Breadcrumbs provide a way to create dynamic
| navigation links that reflect the current route being accessed.
|
*/

Breadcrumbs::for('dashboard', function ($trail, $page) {
    // Misalnya, $page adalah model Page yang merepresentasikan halaman saat ini.
    $trail->parent('home');
    $trail->push($page->title, route('dashboard', $page));
});
