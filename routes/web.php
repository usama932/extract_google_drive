<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SheetController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin/login',[AdminLoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('admin-login',[AdminLoginController::class,'adminLogin'])->name('admin.login');

//Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
//Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'middleware'    => ['auth:admin'],
    'prefix'        => 'admin',
], function ()
{
    Route::get('/dashboard', [AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/profile', [AdminController::class,'edit'])->name('admin-profile');
    Route::get('/sheets', [SheetController::class,'index'])->name('google.sheet');
    Route::get('/logout', [AdminController::class,'logout'])->name('admin-logout');
    Route::post('/admin-update', [AdminController::class,'update'])->name('admin-update');



    //Setting Routes
    Route::resource('setting',SettingController::class);
    Route::get('/cache-clear', [AdminController::class,'configCache'])->name('admin.cache_clear');

    //User Routes
    Route::resource('users',UserController::class);
    Route::get('users/edit/{id}', [UserController::class,'edit'])->name('admin-edit');
    Route::post('get-users', [UserController::class,'getUsers'])->name('admin.getUsers');
    Route::post('get-user', [UserController::class,'userDetail'])->name('admin.getUser');
    Route::get('users/delete/{id}', [UserController::class,'destroy'])->name('user-delete');
    Route::post('delete-selected-users', [UserController::class,'deleteSelectedUsers'])->name('delete-selected-users');

//    //Category Routes
//    Route::resource('categories',CategoriesController::class);
//    Route::get('categories/edit/{id}', [CategoriesController::class,'edit'])->name('admin-categories-edit');
//    Route::post('get-categories', [CategoriesController::class,'getCategories'])->name('admin-getAddedCategories');
//    Route::get('categories/delete/{id}', [CategoriesController::class,'destroy'])->name('admin-categories-delete');
//    Route::post('delete-selected-categories', [CategoriesController::class,'DeleteSelectedCategories'])->name('delete-selected-categories');
//    Route::post('categories/detail', [CategoriesController::class,'getCategoryDetail'])->name('admin-getCategories');

});
