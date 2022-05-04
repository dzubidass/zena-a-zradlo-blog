<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;

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

require __DIR__ . '/auth.php';

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('about', [PagesController::class, 'about'])->name('about');
Route::get('post/{post}', [PostController::class, 'show']);
Route::get('recipes', [PagesController::class, 'recipes'])->name('recipes');

Route::resource('post', PostController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

