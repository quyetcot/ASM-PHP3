<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\DetailNewController;
use App\Http\Controllers\SearchController;
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


Route::get('/',[HomeController::class,'index']);

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/{category}/{slug}', [DetailNewController::class, 'show'])->name('detailnew.show');
Route::get('/{slug}', [CategoryController::class, 'show'])->name('categories.show');


