<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AdminStaffController;
use App\Http\Controllers\Admin\AdminPlayerController;

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

require __DIR__ . '/auth.php';

// Players
Route::get('/players', [PlayerController::class, 'all']);
Route::get('players/{player:slug}', [PlayerController::class, 'show']);

// News and Comments
Route::get('news', [NewsController::class, 'all']);
Route::get('news/{single_news:slug}', [NewsController::class, 'single_news']);
Route::post('news/{single_news:slug}/comments', [CommentController::class, 'store']);

// Admin Stuff

Route::prefix('admin')->group(function () {

    //NEWS
// Route::resource('news', AdminNewsController::class)->except('show');
    Route::get('news', [AdminNewsController::class, 'index'])->name('admin.news');
    Route::get('news/{single_news}/edit', [AdminNewsController::class, 'edit']);
    Route::patch('news/{single_news}', [AdminNewsController::class, 'update']);
    Route::delete('news/{single_news}', [AdminNewsController::class, 'destroy']);
    Route::get('news/create', [AdminNewsController::class, 'create']);
    Route::post('news', [AdminNewsController::class, 'store']);

    // Players
    Route::get('players', [AdminPlayerController::class, 'index'])->name('admin.players');
    Route::get('players/{players}/edit', [AdminPlayerController::class, 'edit']);
    Route::patch('players/{player}', [AdminPlayerController::class, 'update']);
    Route::delete('players/{player}', [AdminPlayerController::class, 'destroy']);
    Route::get('players/create', [AdminPlayerController::class, 'create']);
    Route::post('players', [AdminPlayerController::class, 'store']);

    // Staff
    Route::get('staff', [AdminStaffController::class, 'index'])->name('admin.staff');
    Route::get('staff/{single_staff}/edit', [AdminStaffController::class, 'edit']);
    Route::patch('staff/{single_staff}', [AdminStaffController::class, 'update']);
    Route::delete('staff/{single_staff}', [AdminStaffController::class, 'destroy']);
    Route::get('staff/create', [AdminStaffController::class, 'create']);
    Route::post('staff', [AdminStaffController::class, 'store']);

});

// Players
