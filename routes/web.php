<?php

use App\Http\Controllers\userController;
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

Route::get('/home', [userController::class, 'home'])->name('home.index');

//CREATE ROUTE
Route::get('/home/create', [userController::class, 'create'])->name('create.index');
// POST ROUTE
Route::post('/home/blog', [userController::class, 'post'])->name('post.index');

// BLOG ROUTE
Route::get('/blog', [userController::class, 'blog'])->name('blog.index');

// edit ROUTE
Route::get('/home/blog/{blog}/edit', [userController::class, 'edit'])->name('edit.index');

// UPDATE ROUTE
Route::put('/home/blog/{blog}', [userController::class, 'update'])->name('update.index');

// DELETE ROUTE
Route::delete('/home/blog/{blog}', [userController::class, 'delete'])->name('delete.index');
