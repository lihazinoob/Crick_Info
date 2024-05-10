<?php

use App\Http\Controllers\createplayerController;
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
// For the creation of players in admin panel.
Route::get('/createplayers', function () {
    return view('createplayers');
});

// to show the list of players in admin panel.


Route::post('/store', [iconicmomentsController::class,'store'] );

Route::get('/discover',[MainController::class,'discovergenre']);

Route::get('/players',[createplayerController::class,'showtheplayersinuserpanel']);



Route::post('/listofplayers',[createplayerController::class,'storetheplayersinadminpanel'] );

Route::get('/particularplayer/{id}',[MainController::class,'showparticularplayer'] );

// This route is for getting the team names in the "TeamList.blade.php" file.
Route::get('/teamlist',[MainController::class,'showteamlistinuserpanel'] );

// Route::get('/players',[MainController::class,'players']);