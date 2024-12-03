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
use App\Http\Controllers\Admin\AdminBecomePartnerController;
use App\Http\Controllers\Admin\AdminBecomeSupplierController;
use App\Http\Controllers\admin\AdminContactContriller;
use App\Http\Controllers\admin\BlogController as AdminBlogController;

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
Route::get('/become-a-partner',[BecomePartner::class,'indexB']);
Route::get('/become-a-supplier',[BecomeSupplier::class,'indexS']);
Route::get('/our-partner',[OurPartnerController::class,'index']);
Route::Post('/contact/store',[ContactController::class,'storea'])->name('store');
Route::get('/contact',[ContactController::class,'creatct'])->name('creatct');

Route::Post('/become-a-partner/store',[BecomePartner::class,'storeb'])->name('storeb');
Route::get('/become-a-partner',[BecomePartner::class,'creatctb'])->name('creatctb');

Route::Post('/become-a-supplier/store',[BecomeSupplier::class,'storeds'])->name('stores');
Route::get('/become-a-supplier',[BecomeSupplier::class,'creatctsds'])->name('creatcta');





Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminAuthController::class, 'login']);
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware('auth.admin')->group(function () {
        Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard');
        Route::get('/blog-Dashboard', [AdminBlogController::class, 'blogAll'])->name('blogs');
        Route::get('/blog-Created',[AdminBlogController::class,'created'])->name('created');
        Route::post('/blog-store',[AdminBlogController::class,'store'])->name('store');
        Route::delete('/blogs/{id}', [AdminBlogController::class, 'destroy'])->name('destroy');
        Route::get('/blogs/{id}/edit', [AdminBlogController::class, 'edit'])->name('edit');
        Route::put('/blogs/{id}', [AdminBlogController::class, 'update'])->name('update');
        Route::get('/contact-details',[AdminContactContriller::class,'contactDetailsShow'])->name('conutactDetails');
        Route::get('/contact-details-become-partner',[AdminBecomePartnerController::class,'BecomePartner'])->name('conutactDetailsBecome');
        Route::get('/contact-details-become-supplier',[AdminBecomeSupplierController::class,'BecomeSupplier'])->name('conutactDetailsSupplier');
        Route::delete('/contact-details/{id}', [AdminContactContriller::class, 'detetelContact'])->name('detetelContact');
        Route::delete('/contact-details-become-partner/{id}', [AdminBecomePartnerController::class, 'detetelBecomePartner'])->name('detetelBecomePartner');
        Route::delete('/contact-details-become-supplier/{id}', [AdminBecomeSupplierController::class, 'detetelBecomeSupplier'])->name('detetelBecomeSupplier');
        
    
    
    });

});

