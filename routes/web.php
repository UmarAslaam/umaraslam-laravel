<?php
use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class,"index"]);
Route::get('/about', [ProductController::class,"about"]);
Route::get('/services', [ProductController::class,"services"]);
Route::get('/projects', [ProductController::class,"projects"]);
Route::get('/contact', [ProductController::class,"contact"]);




