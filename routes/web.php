<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Wastecomp\WastecompController;

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
    return view('dashboard.eco.home');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function(){
  
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.user.login')->name('login');
          Route::view('/register','dashboard.user.register')->name('register');
          Route::post('/create',[UserController::class,'create'])->name('create');
          Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
        Route::view('/home', 'dashboard.user.home')->name('home');
        Route::view('/book', 'dashboard.user.book')->name('book');
        Route::view('/report', 'dashboard.user.report')->name('report');
        Route::view('/request_booking', 'dashboard.user.request_booking')->name('request_booking');
        Route::view('/request_tracking', 'dashboard.user.request_tracking')->name('request_tracking');
        Route::post('/booking',[UserController::class,'booking'])->name('booking');
        Route::post('/logout',[UserController::class,'logout'])->name('logout');
        Route::post('/reported',[UserController::class,'reported'])->name('reported');
    });

});

Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
    });

});

Route::prefix('wastecomp')->name('wastecomp.')->group(function(){

    Route::middleware(['guest:wastecomp','PreventBackHistory'])->group(function(){
         Route::view('/login','dashboard.wastecomp.login')->name('login');
         Route::view('/register','dashboard.wastecomp.register')->name('register');
         Route::post('/create',[WastecompController::class,'create'])->name('create');
         Route::post('/check',[WastecompController::class,'check'])->name('check');
    });

    Route::middleware(['auth:wastecomp','PreventBackHistory'])->group(function(){
         Route::view('/home','dashboard.wastecomp.home')->name('home');
         Route::post('logout',[WastecompController::class,'logout'])->name('logout');
         Route::view('/showbooking','dashboard.wastecomp.showbooking')->name('showbooking');
         Route::view('/showtracking','dashboard.wastecomp.showtracking')->name('showtracking');
         Route::view('/addcompinfo','dashboard.wastecomp.add_compinfo')->name('addcompinfo');
         Route::post('/upload',[WastecompController::class,'upload'])->name('upload');
    });

});

Route::prefix('eco')->name('eco.')->group(function(){
  
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          Route::view('/about_us','dashboard.eco.about')->name('about_us');
          Route::view('/term&condition','dashboard.eco.term&condition')->name('term&condition');
          Route::view('/privacy','dashboard.eco.privacy')->name('privacy');
    });

});
