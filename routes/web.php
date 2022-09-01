<?php

use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AdminPlayerController;
use App\Http\Controllers\Admin\AdminStaffController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\StaffController;
use App\Models\News;
use Illuminate\Support\Facades\Route;
use \Rinvex\Country\Country;

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

Route::post('newsletter', NewsletterController::class);

Route::get('/', function () {
    return view('welcome', [
        'news' => News::with('author', 'category')->latest()->paginate(4),
        'extranews' => News::with('author', 'category')->orderBy('id', 'desc')->paginate(7),
    ]
    );
})->name('home');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

require __DIR__ . '/auth.php';

// Players
Route::get('/players', [PlayerController::class, 'all'])->name('players');
Route::get('players/{player:slug}', [PlayerController::class, 'show'])->name('show.player');

// Staff
Route::get('/staff', [StaffController::class, 'all'])->name('staff');
Route::get('staff/{single_staff:slug}', [StaffController::class, 'show'])->name('show.staff');

// News
Route::get('news', [NewsController::class, 'all'])->name('news');
Route::get('news/{single_news:slug}', [NewsController::class, 'single_news'])->name('single_news');

// Comments
Route::post('/comments/store', [CommentController::class, 'store'])->name('comment.add');
Route::post('/reply', [CommentController::class, 'reply'])->name('reply');

// Admin Stuff
Route::get('/country', function () {

    $country = country('GH');
    dd($country);
    // echo $country->getName();
});

Route::group(['middleware' => 'admin'], function () {
    Route::prefix('admin')->group(function () {
        //NEWS
        // Route::resource('news', AdminNewsController::class)->except('show');
        Route::get('news', [AdminNewsController::class, 'index'])->name('admin.news');
        Route::get('news/{single_news}/edit', [AdminNewsController::class, 'edit'])->name('edit.news');
        Route::patch('news/{single_news}', [AdminNewsController::class, 'update'])->name('update.news');
        Route::delete('news/{single_news}', [AdminNewsController::class, 'destroy'])->name('delete.news');
        Route::get('news/create', [AdminNewsController::class, 'create'])->name('create.news');
        Route::post('news', [AdminNewsController::class, 'store'])->name('news.store');

        // Players
        Route::get('players', [AdminPlayerController::class, 'index'])->name('admin.players');
        Route::get('players/{player}/edit', [AdminPlayerController::class, 'edit'])->name('edit.player');
        Route::patch('players/{player}', [AdminPlayerController::class, 'update'])->name('update.player');
        Route::delete('players/{player}', [AdminPlayerController::class, 'destroy'])->name('delete.player');
        Route::get('players/create', [AdminPlayerController::class, 'create'])->name('create.player');
        Route::post('players', [AdminPlayerController::class, 'store'])->name('player.store');

        // Staff
        Route::get('staff', [AdminStaffController::class, 'index'])->name('admin.staff');
        Route::get('staff/{single_staff}/edit', [AdminStaffController::class, 'edit'])->name('edit.staff');
        Route::patch('staff/{single_staff}', [AdminStaffController::class, 'update'])->name('update.staff');
        Route::delete('staff/{single_staff}', [AdminStaffController::class, 'destroy'])->name('delete.staff');
        Route::get('staff/create', [AdminStaffController::class, 'create'])->name('create.staff');
        Route::post('staff', [AdminStaffController::class, 'store']);

        Route::post('images', [ImageController::class, 'store'])->name('admin.news.image.store');
    });
});
// Players
