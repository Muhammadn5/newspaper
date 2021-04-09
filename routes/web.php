<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\crudController;
use App\Http\Controllers\frontController;
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

Route::get('/', [frontController::class, 'index'])->name('home');
Route::get('article/{slug}', [frontController::class, 'article']);
Route::get('/category/{slug}', [frontController::class, 'category'])->name('category');
Route::get('page/{slug}', [frontController::class, 'page']);
Route::get('contact-us', [frontController::class, 'contactUs']);
Route::post('sendmessage',[crudController::class, 'insertData']);

//admin
Route::get('/laranews-admin', [adminController:: class, 'index'])->name('admin');

//CATEGORIES
Route::get('/viewcategory', [adminController::class, 'viewCategory'])->name('admincategory');
Route::post('/addcategory', [crudController::class, 'insertData']);
Route::get('/editcategory/{id}', [adminController::class, 'editCategory']);
Route::post('/updatecategory/{id}', [crudController::class, 'updateData']);
Route::post('/multipledelete', [adminController::class, 'multipleDelete']);

//SETTINGS
Route::get('setting', [adminController::class, 'setting']);
Route::post('addsettings', [crudController::class, 'insertData']);
Route::post('updatesettings/{id}', [crudController::class, 'updateData']);

//POSTS
Route::get('/add-post', [adminController::class, 'addPost']);
Route::post('/addpost', [crudController::class, 'insertData']);
Route::get('/all-posts', [adminController::class, 'allPosts']);
Route::get('/editpost/{id}', [adminController::class, 'editPost']);
Route::post('/updatepost/{id}', [crudController::class, 'updateData']);
Route::get('search-content', [frontController::class, 'searchContent']);

//pages
Route::get('/add-page', [adminController::class, 'addPage']);
Route::post('/addpage', [crudController::class, 'insertData']);
Route::get('/all-pages', [adminController::class, 'allPages']);
Route::get('/editpage/{id}', [adminController::class, 'editPage']);
Route::post('/updatepage/{id}', [crudController::class, 'updateData']);

//messages
Route::get('messages', [adminController::class, 'messages']);

//Advertisements
Route::get('/add-adv', [adminController::class, 'addAdv']);
Route::post('/addadv', [crudController::class, 'insertData']);
Route::get('/all-advs', [adminController::class, 'allAdvs']);
Route::get('/editadv/{id}', [adminController::class, 'editAdv']);
Route::post('/updateadv/{id}', [crudController::class, 'updateData']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [\App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
