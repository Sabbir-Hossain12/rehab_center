<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Backend\BlogController;

Route::view('dashboard','backend.pages.dashboard')->middleware(['auth', 'verified'])->name('dashboard');
Route::view('create-blogs','backend.pages.create-blog')->middleware(['auth', 'verified'])->name('create-blog');
Route::view('booking','backend.pages.booking')->middleware(['auth', 'verified'])->name('booking');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';


Route::group(['prefix' => '/admin'], function () {

    // Blog
    Route::group(['prefix' => '/blog'], function () {
        Route::get('/manage', [BlogController::class, 'manage'])->name('blog.manage');
        Route::get('/create', [BlogController::class, 'create'])->name('blog.create');
        Route::post('/store', [BlogController::class, 'store'])->name('blog.store');
        Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::post('/update/{id}', [BlogController::class, 'update'])->name('blog.update');
        Route::get('/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
    });

});


Route::view('/', 'frontend.pages.home')->name('home');
Route::view('/about', 'frontend.pages.about')->name('about');
Route::view('/team', 'frontend.pages.team')->name('team');
Route::view('/contact', 'frontend.pages.contact')->name('contact');
Route::view('/gallery', 'frontend.pages.gallery')->name('gallery');
Route::view('/blog', 'frontend.pages.blog')->name('blog');
Route::view('/department', 'frontend.pages.department')->name('department');
Route::view('/service', 'frontend.pages.services')->name('service');


