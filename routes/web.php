<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MpesaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgrammeController;

Route::get('/', function () {
    return view('frontend.home');
Route::get('/',[HomeController::class, 'index']);    
});
Route::get('/partners',[PartnerController::class,'index']); 
Route::get('/about',[AboutController::class,'index']); 
Route::get('/contact',[ContactController::class,'index']); 
Route::get('/programme',[ProgrammeController::class,'index']); 
Route::get('/news', [NewsController::class, 'index']);

Route::post('/process-donation', [MpesaController::class, 'processDonation']);
Route::post('/mpesa/callback', [MpesaController::class, 'callback']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

     
});

require __DIR__.'/auth.php';
