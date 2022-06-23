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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Players
Route::get('/players', [PlayerController::class,'all']);
Route::get('players/{player:slug}',[PlayerController::class, 'show']);

// News and Comments
Route::get('news', [NewsController::class,'all']);
Route::get('news/{single_news:slug}', [NewsController::class,'single_news']);
Route::post('news/{single_news:slug}/comments',[CommentController::class,'store']);

