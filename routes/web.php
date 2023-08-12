<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// use , namespace
// Route::get(url, action);
// Route::post(url, action);
// Route::put(url, action);
// Route::patch(url, action);
// Route::deletei  (url, action);

// 5 pages => home, about, contact, team, services
  
Route::get('/', function () {
    return 'home page';
});

Route::get('/about', function () {
    return 'about page';
});

Route::get('/contact', function () {
    return 'contact page';
});

Route::get('/team', function () {
    return 'team page';
});
 
Route::get('/services', function () {
    return 'services page';
});

 