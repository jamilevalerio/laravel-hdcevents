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

Route::get('/', function () {

    $name = "Jamile";
    $age = 25;
    $ocupation = "web developer";
    return view('welcome',['name' => $name, 'age' => $age, 'ocupation' => $ocupation]);
});
Route::get('/contact', function () {
    return view('contact');
});
