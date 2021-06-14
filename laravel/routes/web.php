<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Auth::routes();

// Disable registration
//Auth::routes(['register' => false]); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('baws/home', [HomeController::class, 'baws'])->name('baws')->middleware('baws');
Route::group(['middleware' => ['auth', 'verified']], function () {
    //Route::get('manage', 'App\Http\Controllers\UserController@manage')->middleware('auth');
    Route::get('/manage', function () {
        return view('manage');
    });
});

// Folio 
Route::get('/folio', function () {
    return view('folio/main');
});
Route::get('/folio/home', function () {
    return view('folio/home');
});

/**
 * Social Login
 */
// Route::get('auth/{provider}/login', 'Auth\SocialAuthController@redirectToProvider')->name('social.login');
// Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');