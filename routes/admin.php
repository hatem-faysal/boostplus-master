<?php

use App\Http\Controllers\Admin\ApartmentController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\CarsController;
use App\Http\Controllers\Admin\CmsPageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\GroupLocationController;
use App\Http\Controllers\Admin\HotelApartmentController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\Location\CityController;
use App\Http\Controllers\Admin\Location\CountryController;
use App\Http\Controllers\Admin\Location\DistrictController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\profile\AdminController;
use App\Http\Controllers\Admin\profile\RoleController;
use App\Http\Controllers\Admin\profile\UsersController;
use App\Http\Controllers\Admin\PublicTransportationCityController;
use App\Http\Controllers\Admin\PublicTransportationController;
use App\Http\Controllers\Admin\PublicTransportationsCityController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\TagGroupController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\ContactUsController;
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
        'prefix' => LaravelLocalization::setLocale().'/'.'admin',
        'as'=>'admin.',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ,'authAdmin:admin']
    ], function(){ //...
    // start Route
        Route::get('dashboard',[DashboardController::class,'index'])->name('/');
        Route::resource('admins',AdminController::class);
        Route::resource('users',UsersController::class);
        Route::resource('roles', RoleController::class);
        //Start location
        Route::resource('country', CountryController::class);
        Route::resource('city', CityController::class);
        Route::resource('district', DistrictController::class);
        //End location
        Route::resource('pages', PageController::class);
        Route::resource('cms-pages', CmsPageController::class);
        Route::resource('blogs', BlogsController::class);
        Route::resource('settings', SettingController::class)->except('show');
        Route::resource('contact-us', ContactUsController::class)->except('show');
       
        Route::resource('socialMedia', SocialMediaController::class);
        Route::resource('banner', BannerController::class);
    // End Route
});

