<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('index'); });

// D A T A   E V E N T
Route::get('event',[EventController::class,'index'])->name('event_index');
Route::get('event/create',[EventController::class,'create'])->name('event_create');
Route::post('event/store',[EventController::class,'store'])->name('event_store');
Route::get('event/edit/{id}',[EventController::class,'edit'])->name('event_edit');
Route::put('event/update/{id}',[EventController::class,'update'])->name('event_update');
Route::delete('event/delete/{id}',[EventController::class,'destroy'])->name('event_delete');

Route::get('/pages', function () {
    return view('pages');
});
