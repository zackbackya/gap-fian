<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//route for frontend page
Route::get('/', function () {
    //return view('welcome');
    return view('home.home',[
        "title" => "home"
    ]);
});

Route::get('/property', function () {
    //return view('welcome');
    return view('home.property-grid',[
        "title" => "property"
    ]);
});

Route::get('/agents', function () {
    //return view('welcome');
    return view('home.agents-grid',[
        "title" => "agents"
    ]);
});

Route::get('/about', function () {
    //return view('welcome');
    return view('home.about',[
        "title" => "agent"
    ]);
});

Route::get('/blog', function () {
    //return view('welcome');
    return view('home.blog-grid',[
        "title" => "blog"
    ]);
});

Route::get('/contact', function () {
    //return view('welcome');
    return view('home.contact',[
        "title" => "contact"
    ]);
});




//route for backend page
Route::get('/login', function () {
    return view('login.login');
});

Route::get('/dashboard', function () {
    return 'NANTI SETELAH LOGIN SUKSES MASUK SINI BUAT ATUR CONTENT';
});