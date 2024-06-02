<?php

use App\Http\Controllers\Backend\BasicController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GellaryController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Backend\BlogController;
use  App\Http\Controllers\Backend\ContactController;
use  App\Http\Controllers\Backend\TestimonialCoontroller;

Route::get('dashboard',[DashboardController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::view('create-blogs','backend.pages.create-blog')->middleware(['auth', 'verified'])->name('create-blog');
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
        Route::get('/{id}', [BlogController::class, 'singleBlog'])->name('single.blog');
        Route::post('/comment', [BlogController::class, 'singleBlogComment'])->name('single.blog.comment');
    });

    Route::post('/contact-us', [ContactController::class, 'contactUs'])->name('contact.us');
    Route::get('/contact-manage', [ContactController::class, 'manage'])->name('contact.manage');
    Route::get('/destroy/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

    Route::group(['prefix' => '/gallery'], function () {
        Route::get('/manage', [GellaryController::class, 'manage'])->name('gallery.manage');
        Route::get('/create', [GellaryController::class, 'create'])->name('gallery.create');
        Route::post('/store', [GellaryController::class, 'store'])->name('gallery.store');
        Route::get('/edit/{id}', [GellaryController::class, 'edit'])->name('gallery.edit');
        Route::post('/update/{id}', [GellaryController::class, 'update'])->name('gallery.update');
        Route::get('/destroy/{id}', [GellaryController::class, 'destroy'])->name('gallery.destroy');

    });

    Route::group(['prefix' => '/package'], function () {
        Route::get('/manage', [PackageController::class, 'manage'])->name('package.manage');
        Route::get('/create', [PackageController::class, 'create'])->name('package.create');
        Route::post('/store', [PackageController::class, 'store'])->name('package.store');
        Route::get('/edit/{id}', [PackageController::class, 'edit'])->name('package.edit');
        Route::post('/update/{id}', [PackageController::class, 'update'])->name('package.update');
        Route::get('/destroy/{id}', [PackageController::class, 'destroy'])->name('package.destroy');
    });

    Route::group(['prefix' => '/testimonial'], function () {
        Route::get('/manage', [TestimonialCoontroller::class, 'manage'])->name('testimonial.manage');
        Route::get('/create', [TestimonialCoontroller::class, 'create'])->name('testimonial.create');
        Route::post('/store', [TestimonialCoontroller::class, 'store'])->name('testimonial.store');
        Route::get('/edit/{id}', [TestimonialCoontroller::class, 'edit'])->name('testimonial.edit');
        Route::post('/update/{id}', [TestimonialCoontroller::class, 'update'])->name('testimonial.update');
        Route::get('/destroy/{id}', [TestimonialCoontroller::class, 'destroy'])->name('testimonial.destroy');
    });

    Route::group(['prefix' => '/slider'], function () {
        Route::get('/manage', [SliderController::class, 'manage'])->name('slider.manage');
        Route::get('/create', [SliderController::class, 'create'])->name('slider.create');
        Route::post('/store', [SliderController::class, 'store'])->name('slider.store');
        Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
        Route::post('/update/{id}', [SliderController::class, 'update'])->name('slider.update');
        Route::get('/destroy/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');

    });

    Route::group(['prefix' => '/basic'], function () {
        Route::get('/create', [BasicController::class, 'create'])->name('basic.create');
        Route::post('/store', [BasicController::class, 'store'])->name('basic.store');
        Route::post('/update', [BasicController::class, 'update'])->name('basic.update');


    });

    Route::group(['prefix' => '/team'], function () {
        Route::get('/manage', [TeamController::class, 'manage'])->name('team.manage');
        Route::get('/create', [TeamController::class, 'create'])->name('team.create');
        Route::post('/store', [TeamController::class, 'store'])->name('team.store');
        Route::get('/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
        Route::post('/update/{id}', [TeamController::class, 'update'])->name('team.update');
        Route::get('/destroy/{id}', [TeamController::class, 'destroy'])->name('team.destroy');

    });

});


//Frontend Pages
Route::get('/', [HomeController::class,'home'])->name('home');
Route::view('/about', 'frontend.pages.about')->name('about');

Route::get('/team', [TeamController::class,'teamList'])->name('team');

Route::view('/contact', 'frontend.pages.contact')->name('contact');
Route::get('/gallery',[GellaryController::class,'galleryList'] )->name('gallery');
Route::get('/pricing-plan', [PackageController::class,'packageList'])->name('pricing-plan');
Route::view('/blog', 'frontend.pages.blog')->name('blog');
Route::view('/department', 'frontend.pages.department')->name('department');
Route::view('/service', 'frontend.pages.services')->name('service');


