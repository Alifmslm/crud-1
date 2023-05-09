<?php

use App\Http\Controllers\LaptopController;
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

//view
Route::get('/', [LaptopController::class, 'index']);
Route::get('/create', [LaptopController::class, 'create']);

//create
Route::get('/create-laptop', [LaptopController::class, 'store']);
