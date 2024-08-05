<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuanTriTinController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('download',function(){
    return view('download');
})->middleware('auth');
Route::get('quantritin',[QuanTriTinController::class,'index']);
Route::get('quantri',function(){
    return view('quantri');
})->middleware(['auth','QuanTri']);
Route::get('thongbao',function(){
   echo "Không truy cập được" ;
});
Route::get('dl',function(){
    return view('download');
})->middleware('auth.basic');