<?php

use App\Http\Controllers\ActController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SessionController;
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

// User Routes
Route::middleware(['auth', 'user'])->group(function () {
    Route::resource('home', HomeController::class);
    Route::get('learning/all', [HomeController::class, 'learning_index'])->name('learning.index');
    Route::get('learning/all/{id}/show', [HomeController::class, 'learning_show'])->name('learning.show');
    Route::get('learning/start-quiz', [QuizController::class, 'startQuiz']);
    Route::post('learning/submit-quiz', [QuizController::class, 'submitQuiz']);

    Route::get('kegiatan/all', [HomeController::class, 'kegiatan_index'])->name('kegiatan.index');
    Route::get('kegiatan/all/{id}/show', [HomeController::class, 'kegiatan_show'])->name('kegiatan.show');

    Route::get('berita/all', [HomeController::class, 'berita_index'])->name('berita.index');
    Route::get('berita/all/{id}/show', [HomeController::class, 'berita_show'])->name('berita.show');
    Route::get('/about', function () {
        return view('about.index');
    });
    Route::get('search', [HomeController::class, 'search'])->name('search');
    Route::get('learning/all/search', [HomeController::class, 'search_detail_learning'])->name('search.detail.learning');
    Route::get('kegiatan/all/search', [HomeController::class, 'search_detail_kegiatan'])->name('search.detail.kegiatan');
    Route::get('berita/all/search', [HomeController::class, 'search_detail_berita'])->name('search.detail.berita');
    Route::get('/my-quiz', [HomeController::class, 'myQuiz']);
});

//admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('materi/search', [LearningController::class, 'search_admin_learning'])->name('search.admin.learning');
    Route::resource('materi', LearningController::class);
    Route::get('act/search', [ActController::class, 'search_admin_kegiatan'])->name('search.admin.kegiatan');
    Route::resource('act', ActController::class);
    Route::get('news/search', [NewsController::class, 'search_admin_berita'])->name('search.admin.berita');
    Route::resource('news', NewsController::class);
    Route::get('quiz/search', [QuizController::class, 'search_admin_quiz'])->name('search.admin.quiz');
    Route::get('/quiz/show-quiz', [QuizController::class, 'show']);
    Route::get('/quiz/user-quiz/{quizId}', [QuizController::class, 'userQuiz'])->name('userQuiz');
    Route::resource('quiz', QuizController::class);
});

// Guest Routes
Route::middleware(['guest'])->group(function () {
    Route::get('/', [SessionController::class, 'index'])->name('login.form');
    Route::get('/login', [SessionController::class, 'index'])->name('login.form');
    Route::post('/login', [SessionController::class, 'login'])->name('login.submit');
    Route::get('/register', [SessionController::class, 'register'])->name('register.form');
    Route::post('/register', [SessionController::class, 'create'])->name('register.submit');
});
Route::get('/logout', [SessionController::class, 'logout'])->name('logout');







