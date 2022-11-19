<?php

use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryListingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\HomeAgentsController;
use App\Http\Controllers\HomeArticlesController;
use App\Http\Controllers\HomeContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeListingsController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TestimonyController;
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

 








//route for backend page





//Route::get('/dashboard/article',[ArticleController::class, 'index']);

Route::get('/',[HomeController::class, 'index']);
Route::resource('/articles',HomeArticlesController::class);
Route::get('/agents',[HomeAgentsController::class, 'index']);
Route::resource('/contact',HomeContactController::class);

Route::resource('/listings',HomeListingsController::class);

/*
Route::controller(HomeListingsController::class)->group(function () {
    Route::get('/listings/{slug}', 'show');
    Route::get('/listings', 'index');
});
*/

//Route::resource('/listings',HomeListingsController::class);


Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authentication']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/dashboard/article/checkSlug',[ArticleController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/listing',ListingController::class)->middleware('auth');
Route::resource('/dashboard/agents',AgentController::class)->middleware('auth');
Route::resource('/dashboard/article',ArticleController::class)->middleware('auth');
Route::resource('/dashboard/user',UserLoginController::class)->middleware('superadmin');
Route::resource('/dashboard/report',ReportController::class)->middleware('superadmin');

Route::resource('/dashboard/profile',ProfileController::class)->middleware('auth');


/*
Route::controller(ProfileController::class)->group(function () {
    Route::get('/dashboard/profile', 'index')->middleware('auth');
    Route::get('/dashboard/profile/{id}/edit', 'edit')->middleware('auth');
    Route::put('/dashboard/profile/{id}', 'update')->middleware('auth');
});
*/


//Route::post('/message',[MessageController::class,'store']);
Route::resource('/dashboard/message',MessageController::class)->middleware('auth');
//Route::post('/send_message',[MessageController::class,'store']);

Route::resource('/dashboard/testimony',TestimonyController::class)->middleware('auth');

//Route::resource('/dashboard',Dashboard::class)->middleware('auth');

Route::get('/dashboard',[Dashboard::class,'index'])->middleware('auth');

Route::resource('/dashboard/categoryListing',CategoryListingController::class)->middleware('auth');
Route::resource('/dashboard/categoryArticle',CategoryArticleController::class)->middleware('auth');

//Route::post('/add_user',[UserLoginController::class, 'store'])->middleware('auth');

