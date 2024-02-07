<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WedoController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PartnerController;

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

Route::get('admin/login', function () {return view('BackEnd.login'); })->name('login');

Route::post('post-login', [AuthController::class, 'login'])->name('post-login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        // D A T A   E V E N T
        Route::get('event',[EventController::class,'index'])->name('event_index');
        Route::get('event/create',[EventController::class,'create'])->name('event_create');
        Route::post('event/store',[EventController::class,'store'])->name('event_store');
        Route::get('event/edit/{id}',[EventController::class,'edit'])->name('event_edit');
        Route::put('event/update/{id}',[EventController::class,'update'])->name('event_update');
        Route::delete('event/delete/{id}',[EventController::class,'destroy'])->name('event_delete');

        // D A T A   E V E N T
        Route::get('wedo',[WedoController::class,'index'])->name('wedo_index');
        Route::get('wedo/create',[WedoController::class,'create'])->name('wedo_create');
        Route::post('wedo/store',[WedoController::class,'store'])->name('wedo_store');
        Route::get('wedo/edit/{id}',[WedoController::class,'edit'])->name('wedo_edit');
        Route::put('wedo/update/{id}',[WedoController::class,'update'])->name('wedo_update');
        Route::delete('wedo/delete/{id}',[WedoController::class,'destroy'])->name('wedo_delete');

        // D A T A   E V E N T
        Route::get('partner',[PartnerController::class,'index'])->name('partner_index');
        Route::get('partner/create',[PartnerController::class,'create'])->name('partner_create');
        Route::post('partner/store',[PartnerController::class,'store'])->name('partner_store');
        Route::get('partner/edit/{id}',[PartnerController::class,'edit'])->name('partner_edit');
        Route::put('partner/update/{id}',[PartnerController::class,'update'])->name('partner_update');
        Route::delete('partner/delete/{id}',[PartnerController::class,'destroy'])->name('partner_delete');
    });
});


// Route::get('/', function () { return view('pages'); });
Route::get('/',[FrontendController::class,'pagesController'])->name('pages-controller');
