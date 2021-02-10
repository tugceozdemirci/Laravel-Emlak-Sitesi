<?php

use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home2', function () {
    return view('welcome');
});
Route::redirect('/anasayfa','/home')->name('anasayfa');

Route::get('/',function () {
    return view('home.index');
});

Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/aboutus',[HomeController::class,'aboutus'])->name('aboutus');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::post('/sendmessage',[HomeController::class,'sendmessage'])->name('sendmessage');
Route::get('/apartment/{id}', [HomeController::class, 'apartment'])->name('apartment');
Route::get('/categoryapartments/{id}', [HomeController::class, 'categoryapartments'])->name('categoryapartments');






//Route::get('/test/{id}/{name}',[HomeController::class,'test'])->where(['id'=>'[0-9])+','name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}',[HomeController::class,'test'])->whereNumber('id')->whereAlpha('name')->name('test');


//admin
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_home');

    #Category
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

    #Apartment
    Route::prefix('apartment')->group(function() {
        Route::get('/' , [\App\Http\Controllers\Admin\ApartmentController::class, 'index'])->name('admin_apartments');
        Route::get('create' , [\App\Http\Controllers\Admin\ApartmentController::class, 'create'])->name('admin_apartment_add');
        Route::post('store' , [\App\Http\Controllers\Admin\ApartmentController::class, 'store'])->name('admin_apartment_store');
        Route::get('edit/{id}' , [\App\Http\Controllers\Admin\ApartmentController::class, 'edit'])->name('admin_apartment_edit');
        Route::post('update/{id}' , [\App\Http\Controllers\Admin\ApartmentController::class, 'update'])->name('admin_apartment_update');
        Route::get('delete/{id}' , [\App\Http\Controllers\Admin\ApartmentController::class, 'destroy'])->name('admin_apartment_delete');
        Route::get('show' , [\App\Http\Controllers\Admin\ApartmentController::class, 'show'])->name('admin_apartment_show');

    });

    #Message
    Route::prefix('messages')->group(function() {
        Route::get('/', [MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');
    });

    #Product Image Gallery
    Route::prefix('image')->group(function() {
        Route::get('create/{apartment_id}' , [ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{apartment_id}' , [ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{apartment_id}' , [ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show' , [ImageController::class, 'show'])->name('admin_image_show');

    });

    #Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');


});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function() {

    Route::get('/' , [UserController::class, 'index'])->name('myprofile');

});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function() {

    Route::get('/profile' , [UserController::class, 'index'])->name('userprofile');

    #Apartment
    Route::prefix('apartment')->group(function() {
        Route::get('/' , [ApartmentController::class, 'index'])->name('user_apartments');
        Route::get('create' , [ApartmentController::class, 'create'])->name('user_apartment_add');
        Route::post('store' , [ApartmentController::class, 'store'])->name('user_apartment_store');
        Route::get('edit/{id}' , [ApartmentController::class, 'edit'])->name('user_apartment_edit');
        Route::post('update/{id}' , [ApartmentController::class, 'update'])->name('user_apartment_update');
        Route::get('delete/{id}' , [ApartmentController::class, 'destroy'])->name('user_apartment_delete');
        Route::get('show' , [ApartmentController::class, 'show'])->name('user_apartment_show');

    });
    #Product Image Gallery
    Route::prefix('image')->group(function() {
        Route::get('create/{apartment_id}' , [ImageController::class, 'create'])->name('user_image_add');
        Route::post('store/{apartment_id}' , [ImageController::class, 'store'])->name('user_image_store');
        Route::get('delete/{id}/{apartment_id}' , [ImageController::class, 'destroy'])->name('user_image_delete');
        Route::get('show' , [ImageController::class, 'show'])->name('user_image_show');

    });

});

Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home')->middleware('auth');

Route::get('/admin/login',[HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout',[HomeController::class,'logout'])->name('admin_logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
