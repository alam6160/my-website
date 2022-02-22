<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendcontroller;
use App\Http\Controllers\todocontroller;

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

// Route::get('/', function () {
//     return view('backend.contract');
// });
// Route::get('/sojol', function () {
//     return view('backend.create');
// });

Route::get('home',[frontendcontroller::class,'index']);
Route::post('send',[frontendcontroller::class,'store']);
Route::get('about/me',[frontendcontroller::class,'abot']);



Route::get('view',[todocontroller::class,'index']);
Route::get('insert',[todocontroller::class,'create']);
Route::post('insertdata',[todocontroller::class,'store']);
Route::patch('/editdata/{$id}',[todocontroller::class,'edit']);
Route::get('',[todocontroller::class,'update']);
Route::get('/deletedata/{$id}',[todocontroller::class,'destroy']);


// Route::get('editrr',[todocontroller::class,'edit']);



Route::prefix('personal_website')->group( function() {

    // Route::get('',[frontendcontroller::class,])->name('.site');
    // Route::get('',[frontendcontroller::class,])->name('.site');
    // Route::get('',[frontendcontroller::class,])->name('.site');





});
