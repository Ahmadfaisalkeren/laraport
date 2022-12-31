<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'index']);
Route::get('/admin', fn () => redirect()->route('login'));

Route::prefix('admin/')->middleware('auth')->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::resource('about', AboutController::class);
    Route::resource('home', HomeController::class);
    Route::resource('transaction', TransactionController::class);
    Route::resource('skill', SkillController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('certificate', CertificateController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('profil', ProfilController::class);
});
