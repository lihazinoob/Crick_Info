<?php

use App\Http\Controllers\iconicmomentsController;
use App\Http\Controllers\MainController;
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

// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/',[iconicmomentsController::class,'showtheiconicmoments'] );
Route::get('/create', function () {
    return view('createiconicmoments');
});

Route::post('/store', [iconicmomentsController::class,'store'] );

Route::get('/discover',[MainController::class,'discovergenre']);

Route::get('/players',[MainController::class,'players']);