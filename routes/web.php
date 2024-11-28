<?php

use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BecomePartner;
use App\Http\Controllers\frontend\BecomeSupplier;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\OurPartnerController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\TeamController;
use App\Http\Controllers\frontend\TestimonialController;
use Illuminate\Support\Facades\Route;

//Admin
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminAuthController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index']);
Route::get('/about-us',[AboutController::class,'index']);
Route::get('/our-service',[ServiceController::class,'index']);
Route::get('/our-product',[ProductController::class,'index']);
Route::get('/our-team',[TeamController::class,'index']);
Route::get('/testimonial',[TestimonialController::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/become-a-partner',[BecomePartner::class,'index']);
Route::get('/become-a-supplier',[BecomeSupplier::class,'index']);
Route::get('/our-partner',[OurPartnerController::class,'index']);




Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminAuthController::class, 'login']);
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware(['auth:admin'])->get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard');
});

