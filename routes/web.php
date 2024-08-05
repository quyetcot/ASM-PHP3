<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\DetailNewController;
use App\Http\Controllers\Client\SearchController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;

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


// Trang chính
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});


Route::middleware(['auth', 'editor'])->group(function () {
    Route::get('editor/dashboard', [DashboardController::class, 'editorDashboard'])->name('editor.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index']);
});

// Đăng ký và đăng nhập
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Khôi phục mật khẩu
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Route để hiển thị form đặt lại mật khẩu
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Xác minh email
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

Route::resource('admin/articles', ArticleController::class);

Route::resource('admin/categories', AdminCategoryController::class);

Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');

// Tìm kiếm
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Chi tiết bài viết và danh mục
Route::get('/{category}/{slug}', [DetailNewController::class, 'show'])->name('detailnew.show');
Route::get('/{slug}', [CategoryController::class, 'show'])->name('categories.show');
