<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
    Route::get('/test-table',[DashboardController::class, 'testTable'])->name('test-table');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/docotor-specialist',[SpecialistController::class, 'specialist'])->name('docotor-specialist');
    Route::get('/shop-add',[ShopController::class, 'shop'])->name('shop-add');
    Route::get('/shop-show',[ShopController::class, 'shop_show'])->name('shop-show');
});


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/adminauth.php';

