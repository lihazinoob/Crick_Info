<?php

use App\Http\Controllers\createIntlTeamController;
use App\Http\Controllers\createplayerController;
use App\Http\Controllers\iconicmomentsController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authcontroller;

Route::get('/',[authcontroller::class,'authenticationprocess']);
// This Route is for LOGIN Purpose
Route::post('/loginaction',[authcontroller::class,'loginaction']);

// This Route is for REGISTER Purpose
Route::post('/register',[authcontroller::class,'registeruser']);


Route::get('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
});

// Route::get('/', [iconicmomentsController::class, 'showtheiconicmoments']);
// This route is for creating iconic moments in admin panel.
Route::get('/create', function () {
    return view('createiconicmoments');
});
// This route is for showing the list of iconic moments in admin panel.
Route::get('/listoficonicmoments', [MainController::class, 'showtheiconicmomentsinadminpanel']);
// This route is for updating the iconic moments in admin panel.
Route::get('/create/{id}/update', [iconicmomentsController::class, 'updateiconicmoments']);
// This route is for post method reagrding the update of iconic moments in admin panel.
Route::post('/updateiconicmoments/{id}', [iconicmomentsController::class, 'update']);
// This route is for deleting the iconic moments in admin panel.
Route::get('/create/{id}/delete', [iconicmomentsController::class, 'delete']);


// For the creation of players in admin panel.
Route::get('/createplayers', function () {
    return view('createplayers');
});

// to show the list of players in admin panel.


Route::post('/storeiconic', [iconicmomentsController::class, 'store']);


Route::get('/discover', [MainController::class, 'discovergenre']);

Route::get('/players', [createplayerController::class, 'showtheplayersinuserpanel']);



Route::post('/listofplayers', [createplayerController::class, 'storetheplayersinadminpanel']);

Route::get('/particularplayer/{id}', [MainController::class, 'showparticularplayer']);

// This route is for getting the team names in the "TeamList.blade.php" file.
Route::get('/teams', [MainController::class, 'showteamlistinuserpanel']);

// This route is to show the admin panel of creating International Teams.
Route::get('/createIntlteams', function () {
    return view('createInternationalTeam');
});

// This route is to post  the list of created teams in the admin panel.
Route::post('/listofteams', [createIntlTeamController::class, 'storetheteamsinadminpanel']);

// This is the route to show particular team details using the team id.
Route::get('/particularIntlteam/{id}', [MainController::class, 'showparticularIntlteam']);


Route::middleware('auth')->group(
    function () {

        // This is the route for showing the admin panel.
        Route::get('/adminpanel', [MainController::class, 'showadminpanel']);
    }
);
