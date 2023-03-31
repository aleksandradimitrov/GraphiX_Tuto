<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AboutUsController;

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
    return Inertia::render('Dashboard', [

    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return Inertia::render('Dashboard', ['user' => \Auth::user()]);
    // })->name('dashboard');

    Route::prefix('/videos')->group(function() {
        Route::get('/', [VideoController::class, 'index'])->name('video.index');
    });
    Route::get('/about', [AboutUsController::class, 'index'])->name('about');

    Route::get('/forum', function () {
        return Inertia::render('Forum');
    })->name('forum');
});
