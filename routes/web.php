<?php

use App\Http\Controllers\createIntlTeamController;
use App\Http\Controllers\createplayerController;
use App\Http\Controllers\iconicmomentsController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\admincontroller;

Route::get('/', [authcontroller::class, 'authenticationprocess']);
// This Route is for LOGIN Purpose
Route::post('/loginaction', [authcontroller::class, 'loginaction']);


// This Route is for REGISTER Purpose
Route::post('/register', [authcontroller::class, 'registeruser']);


Route::get('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/')->with('message', 'You are now logged out');
});

Route::get('/homepage', [iconicmomentsController::class, 'showtheiconicmoments']);


// Route::get('/', [iconicmomentsController::class, 'showtheiconicmoments']);



// For the creation of players in admin panel.
Route::get('/createplayers', function () {
    return view('createplayers');
});

// to show the list of players in admin panel.


Route::post('/storeiconic', [iconicmomentsController::class, 'store']);


Route::get('/discover', [MainController::class, 'discovergenre']);

Route::get('/players', [createplayerController::class, 'showtheplayersinuserpanel']);





Route::get('/particularplayer/{id}', [MainController::class, 'showparticularplayer']);
Route::get('/addtolist/{playerid}/{userid}',[MainController::class,'addtothelist']);

Route::get('/yourlist/{userid}',[MainController::class,'showyourlist']);

// This route is for getting the team names in the "TeamList.blade.php" file.
Route::get('/teams', [MainController::class, 'showteamlistinuserpanel']);

// This route is to show the admin panel of creating International Teams.




// This is the route to show particular team details using the team id.
Route::get('/particularIntlteam/{id}', [MainController::class, 'showparticularIntlteam']);
// This route is for stadiums
Route::get('/stadiums', [MainController::class, 'showstadiumlistinuserpanel']);

Route::get('/particularstadium/{id}', [MainController::class, 'showparticularstadium']);
Route::get('/adminlogin',[authcontroller::class,'adminlogin']);

Route::middleware('auth')->group(
    function () {

        // This is the route for showing the admin panel.
        
        Route::get('/adminpanel', [MainController::class, 'showadminpanel']);
        // This route is for showing the list of iconic moments in admin panel.
        Route::get('/listoficonicmoments', [MainController::class, 'showtheiconicmomentsinadminpanel']);
        // This route is for creating iconic moments in admin panel.
        Route::get('/create', function () {
            return view('createiconicmoments');
        });

        // This route is for updating the iconic moments in admin panel.
        Route::get('/create/{id}/update', [iconicmomentsController::class, 'updateiconicmoments']);
        // This route is for post method reagrding the update of iconic moments in admin panel.
        Route::post('/updateiconicmoments/{id}', [iconicmomentsController::class, 'update']);
        // This route is for deleting the iconic moments in admin panel.
        Route::get('/create/{id}/delete', [iconicmomentsController::class, 'delete']);

        // This route is for showing the forms in createStadium Page
        Route::get('/createStadium', function () {
            return view('createStadium');
        });
        // This route is for storing the stadium details in the database.
        Route::post('/storeStadium', [admincontroller::class, 'storestadium']);


        // This route is for showing the stadiums in admin panel.
        Route::get('/listofstadiums', [MainController::class, 'showthestadiumsinadminpanel']);
        // This route is for updating the stadium details in admin panel.
        Route::get('/create/{id}/updatestadium', [admincontroller::class, 'updatestadium']);
        Route::post('/updatestadium/{id}', [admincontroller::class, 'update']);
        // This route is for deleting the stadium details in admin panel.
        Route::get('/create/{id}/deletestadium', [admincontroller::class, 'delete']);

        Route::get('/createIntlteams', function () {
            return view('createInternationalTeam');
        });

        Route::post('/listofinternationalteams', [createIntlTeamController::class, 'storetheintlteamsinadminpanel']);
        Route::get('/listofIntlteams', [admincontroller::class, 'showtheIntlteamsinadminpanel']);
        //Route::post('/storeIntlteams', [createIntlTeamController::class, 'storetheteamsinadminpanel']);
        Route::get('/create/{id}/updateIntlteam', [admincontroller::class, 'updateIntlteam']);

        Route::post('/updateIntlteam/{id}', [admincontroller::class, 'updateIntlteaminadmin']);
        Route::get('/create/{id}/deleteIntlteam', [admincontroller::class, 'deleteIntlteam']);

        // For the creation of players in admin panel.
        Route::get('/createplayers', function () {
            return view('createplayers');
        });

        Route::post('/listofplayers', [createplayerController::class, 'storetheplayersinadminpanel']);

        Route::get('/storeplayers', [admincontroller::class, 'showtheplayersinadminpanel']);

        Route::get('/create/{id}/updateplayer',[admincontroller::class,'updateplayershow']);
        Route::post('/updateplayers/{id}',[admincontroller::class,'updateplayerinadminpanel']);
        Route::get('/create/{id}/deleteplayer',[admincontroller::class,'deleteplayer']);







        // This route is to post  the list of created teams in the admin panel.

    }
);
