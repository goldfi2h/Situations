<?php

use App\Http\Controllers\SituationController;
use App\Models\Situation;
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

Route::get('/', function () {
    return view('welcome', [
        'heading' => 'All situations',
        'situations' => Situation::all()
    ]);
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/situation4', function () {
    return view('situation4', [
        'random'=>SituationController::newID(),
        'situation' =>SituationController::findme(),
    //    'entriesSit'=>SituationController::findentry(SituationController::newID()),
    ]);
});