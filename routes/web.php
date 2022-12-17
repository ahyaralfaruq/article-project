<?php

use Illuminate\Support\Facades\Route;

// controllers
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

// admin routes
Route::get('/admin/login', [AdminController::class, 'viewLogin']);
Route::get('/admin/register', [AdminController::class, 'viewRegister']);
Route::get('/admin', [AdminController::class, 'viewIndex']);
Route::get('/admin/yp-{id}', [AdminController::class, 'viewMyProfile']);
Route::get('/admin/post', [AdminController::class, 'viewPostArticle']);
Route::get('/admin/view-posts', [AdminController::class, 'viewMyPosts']);
Route::get('/admin/view-posts/{id}', [AdminController::class, 'viewMySinglePost']);


Route::get('/', [UserController::class, 'index']);
Route::get('/posts', [UserController::class, 'viewArticles']);
Route::get('/posts/{slug}', [UserController::class, 'viewArticle']);

