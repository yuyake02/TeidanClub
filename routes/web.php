<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Auth\AdminAuthenticatedSessionController;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminArtistController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\Auth\AuthenticatedSessionController;
use App\Http\Controllers\User\SubscriptionController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ArticleController;
use App\Http\Controllers\User\ArtistController;

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

//一般ユーザ
Route::middleware('web')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('artists', [ArtistController::class, 'index'])->name('artists');
    Route::get('artists/{category}', [ArtistController::class, 'orderByCategory'])->name('artists.category');
    Route::get('articles', [ArticleController::class, 'index'])->name('articles');
    Route::get('articles/{age}', [ArticleController::class, 'orderByAge'])->name('articles.age');
    Route::get('article/{vol}', [ArticleController::class, 'showArticle'])->name('article.show');
});

Route::prefix('subscription')->group(function () {
    Route::get('/', [SubscriptionController::class, 'index'])->name('subscription.index');
    Route::get('register', [SubscriptionController::class, 'showRegistrationForm'])->name('subscription.registerForm');
    Route::post('register', [SubscriptionController::class, 'register'])->name('subscription.register');
});

// ユーザログイン関連
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

//ログインユーザ関連
// Route::middleware(['auth'])->group(function () {　　　→マルチログイン未対応のためコメントアウト

Route::get('mypage', [UserController::class, 'mypage'])->name('mypage');
Route::get('email/edit', [UserController::class, 'emailEdit'])->name('email.edit');
Route::put('email/update', [UserController::class, 'emailUpdate'])->name('email.update');
Route::get('password/edit', [UserController::class, 'passwordEdit'])->name('password.edit');
Route::put('password/update', [UserController::class, 'passwordUpdate'])->name('password.update');

// });



//管理者関連
// Route::prefix('admin')->middleware('admin')->group(function () {　　　→マルチログイン未対応のためコメントアウト

Route::prefix('admin')->group(
    function () {
        Route::get('login', [AdminAuthenticatedSessionController::class, 'create'])->name('admin.login');
        Route::post('login', [AdminAuthenticatedSessionController::class, 'store']);
        Route::post('/logout', [AdminAuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

        Route::get('mypage', [AdminController::class, 'mypage'])->name('admin.mypage');
        Route::get('email/edit', [AdminController::class, 'emailEdit'])->name('admin.email.edit');
        Route::put('email/update', [AdminController::class, 'emailUpdate'])->name('admin.email.update');
        Route::get('password/edit', [AdminController::class, 'passwordEdit'])->name('admin.password.edit');
        Route::put('password/update', [AdminController::class, 'passwordUpdate'])->name('admin.password.update');

        Route::get('article/create', [AdminArticleController::class, 'articleCreate'])->name('admin.article.create');
        Route::get('article/confirm', [AdminArticleController::class, 'articleConfirm'])->name('admin.article.confirm');
        Route::post('article/store', [AdminArticleController::class, 'articleStore'])->name('admin.article.store');

        Route::get('artist/create', [AdminArtistController::class, 'artistCreate'])->name('admin.artist.create');
        Route::get('artist/confirm', [AdminArtistController::class, 'artistConfirm'])->name('admin.artist.confirm');
        Route::post('artist/store', [AdminArtistController::class, 'artistStore'])->name('admin.artist.store');
    }
);

// });






// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
