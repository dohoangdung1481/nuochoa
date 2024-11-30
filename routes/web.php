<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\DanhMucController;

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
    return view('pages.home');
});
Route::get('giohang', function () {
    return view('pages.giohang');
});
Route::get('/search', [SanPhamController::class, 'search'])->name('search') ;

// Route::get('/', [DanhMucController::class, 'index'])->name('navigation');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/sanpham/{id}', [SanPhamController::class, 'show'])->name('sanpham.show');

require __DIR__.'/auth.php';
