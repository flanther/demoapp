<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\UiController;
use App\Http\Resources\Actor as ActorResource;
use App\Models\Actor;
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
    return view('welcome');
});

// Route::get('/home', [HomeController::class, 'index']);

Route::get('/actors', [ActorsController::class, 'index']);
Route::get('/actors/{id}', [ActorsController::class, 'getActor']);

Route::get('/allactors', function () {
    return ActorResource::collection(Actor::all());
});

Route::get('/ui', [UiController::class, 'index']);
