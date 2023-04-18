<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BackendController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/profiles', [FrontendController::class, 'profile'])->name('profile');

Route::get('/profiles={slug}', [FrontendController::class, 'profile_details'])->name('profile_details');


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/name-update', [BackendController::class, 'name_update'])->name('name_update');
Route::post('/desp-update', [BackendController::class, 'desp_update'])->name('desp_update');
Route::post('/photo-update', [BackendController::class, 'photo_update'])->name('photo_update');
Route::post('/video-update', [BackendController::class, 'video_update'])->name('video_update');
Route::post('/profile-update', [BackendController::class, 'profile_update'])->name('profile_update');