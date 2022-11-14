<?php

use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryListingController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\HomeAgentsController;
use App\Http\Controllers\HomeArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeListingsController;
use App\Http\Controllers\ListingController;
use App\Models\Category;
use App\Models\CategoryArticle;
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

 


Route::get('/about', function () {
    //return view('welcome');
    return view('home.about',[
        "title" => "agent"
    ]);
});

Route::get('/contact', function () {
    //return view('welcome');
    return view('home.contact',[
        "title" => "contact"
    ]);
});




//route for backend page


Route::get('/dashboard/report', function () {
    return view('admin.report',[
        "title" => "report"
    ]);
});



Route::get('/dashboard/profile', function () {
    return view('admin.profile',[
        "title" => "profile"
    ]);
});

//Route::get('/dashboard/article',[ArticleController::class, 'index']);

Route::get('/',[HomeController::class, 'index']);
Route::get('/articles',[HomeArticlesController::class, 'index']);
Route::get('/agents',[HomeAgentsController::class, 'index']);
//Route::get('/listings',[HomeListingsController::class, 'index']);
//Route::get('/listings/{slug}', [HomeListingsController::class, 'show']);

Route::controller(HomeListingsController::class)->group(function () {
    Route::get('/listings/{slug}', 'show');
    Route::get('/listings', 'index');
});

//Route::resource('/listings',HomeListingsController::class);


Route::get('/login',[LoginController::class, 'index'])->middleware('guest');
Route::post('/login',[LoginController::class, 'authentication']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/dashboard/article/checkSlug',[ArticleController::class, 'checkSlug']);
Route::resource('/dashboard/listing',ListingController::class);
Route::resource('/dashboard/agents',AgentController::class);
Route::resource('/dashboard/article',ArticleController::class);
Route::resource('/dashboard/user',UserLoginController::class);
Route::resource('/dashboard',Dashboard::class);

Route::resource('/dashboard/categoryListing',CategoryListingController::class);
Route::resource('/dashboard/categoryArticle',CategoryArticleController::class);

//Route::post('/add_user',[UserLoginController::class, 'store'])->middleware('auth');

