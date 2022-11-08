<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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

Route::get('/', [MenuController::class, 'show']);
Route::get('/type/{type}', [MenuController::class, 'showMenu']);
Route::post('/type/{type}', [MenuController::class, 'updateOrDeleteMenu']);
Route::post('/', [MenuController::class, 'add']);
Route::post('/info',[MenuController::class,"showinfo"]);
Route::get('/info',[MenuController::class,"showinfo"]);