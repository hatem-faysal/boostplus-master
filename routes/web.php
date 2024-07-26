<?php

use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactUsController;
use App\Http\Controllers\frontend\HomePageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...
    // start Route


        Route::post('contactus/store',[ContactUsController::class,'store'])->name('contactus.store');
        Route::get('blog/{slug?}',[BlogController::class,'blog'])->name('blog.front');
        Route::get('{slug?}/{subSlug?}',[HomePageController::class,'index'])->name('home');
        Route::get('/',[HomePageController::class,'index']);

        Route::get('/sign_in', function () {
            return view('frontend.page.sign_in');
        })->name('/sign_in');
        
        
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');
        require __DIR__.'/auth.php';
        
    // End Route
});