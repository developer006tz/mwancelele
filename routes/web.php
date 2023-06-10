<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MwanceleleController;

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
    return view('website.index');
});

// Compare this snippet from app\Http\Controllers\MwanceleleController.php:

//Route::get('/mwancelele', 'MwanceleleController@index');
Route::get('/mwancelele-home', [MwanceleleController::class, 'index'])->name(
    'mwancelele.index'
);
