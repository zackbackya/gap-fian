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
    return view('admin.dashboard',[
        "title" => "dashboard"
    ]);
});

Route::get('/dashboard/report', function () {
    return view('admin.report',[
        "title" => "report"
    ]);
});

Route::get('/dashboard/agents', function () {
    return view('admin.agents',[
        "title" => "agents"
    ]);
});

Route::get('/dashboard/listing', function () {
    return view('admin.listing',[
        "title" => "listing"
    ]);
});

Route::get('/dashboard/article', function () {
    return view('admin.article',[
        "title" => "article"
    ]);
});

Route::get('/dashboard/profile', function () {
    return view('admin.profile',[
        "title" => "profile"
    ]);
});

Route::get('/dashboard/user', function () {
    return view('admin.user',[
        "title" => "user"
    ]);
});


