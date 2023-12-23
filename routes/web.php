<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\LogoutController;


  
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
  
Route::get('/', function () {
    return view('frontend.landing');
});

Route::get('/', function () {
    return view('frontend.landing');
});

Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/sigin', function () {
    return view('frontend.sigin');
});

Route::get('/user', function () {
    return view('frontend.user');
});
  
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/frontend/edituser', [HomeController::class, 'edituser'])->name('edituser');
    Route::get('/frontend/edituser1', [HomeController::class, 'edituser1'])->name('edituser1');
    Route::group(['middleware' => ['auth']], function() {
        Route::post('/delete-account', [HomeController::class, 'deleteAccount'])->name('delete-account');
        

        Route::post('/home', [HomeController::class, 'profileUpdate'])->name('profileupdate');
        /**
        * Logout Route
        */
        Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
     });

});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::post('/admin/home','LoginController@profileUpdate')->name('profileupdate');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:mitra'])->group(function () {
  
    Route::get('/mitra/home', [HomeController::class, 'mitraHome'])->name('mitra.home');

    Route::post('/mitra/home','LoginController@profileUpdate')->name('profileupdate');
    Route::group(['middleware' => ['auth']], function() {
        /**
        * Logout Route
        */
        Route::post('/admin/home','LoginController@profileUpdate')->name('profileupdate');
    });

});


