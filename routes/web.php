<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/articles', [PostController::class, 'index'])->name('articles.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('articles.create');
Route::post('/posts/create', [PostController::class, 'store'])->name('articles.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->whereNumber('id')->name('articles.posts');
Route::get('/contact', [PostController::class, 'contact'])->name('contact');



 /**JSON FORMAT
 * Route::get('/a', function () {
    return response()->json([
        'title' => 'slatu',
        'desc' => 'dyslexie'
    ]);
});**/