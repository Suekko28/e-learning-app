<?php

use App\Http\Controllers\ActController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\NewsController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/e-learning', function () {
    return view('learning.index');
});

Route::get('/e-learning/show', function () {
    return view('learning.show');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

// Route::get('/berita/show', function () {
//     return view('news.show');
// });

// Route::get('/berita', function () {
//     return view('news.index');
// });

// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// });

// Route::get('/kegiatan', function () {
//     return view('act.index');
// });

// Route::get('/kegiatan/show', function () {
//     return view('act.show');
// });

// Route::get('/about', function () {
//     return view('about.index');
// });


// Route::get('/admin/materi', function () {
//     return view('admin.e-learning.materi');
// });

// Route::get('/admin/materi/create', function () {
//     return view('admin.e-learning.create');
// });

// Route::get('/admin/kegiatan', function () {
//     return view('admin.act.act');
// });

// Route::get('/admin/kegiatan/create', function () {
//     return view('admin.act.create');
// });


// Route::get('/admin/berita', function () {
//     return view('admin.news.news');
// });

// Route::get('/admin/berita/create', function () {
//     return view('admin.news.create');
// });


Route::resource('admin/dashboard', DashboardController::class);
Route::resource('admin/materi', LearningController::class);
Route::resource('admin/kegiatan', ActController::class);
Route::resource('admin/berita', NewsController::class);




