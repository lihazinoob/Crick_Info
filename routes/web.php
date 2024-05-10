<?php

use App\Http\Controllers\createIntlTeamController;
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
Route::get('/teams',[MainController::class,'showteamlistinuserpanel'] );

// This route is to show the admin panel of creating International Teams.
Route::get('/createIntlteams', function () {
    return view('createInternationalTeam');
});

// This route is to post  the list of created teams in the admin panel.
Route::post('/listofteams',[createIntlTeamController::class,'storetheteamsinadminpanel'] );

// This is the route to show particular team details using the team id.

Route::get('/particularIntlteam/{id}',[MainController::class,'showparticularIntlteam'] );

