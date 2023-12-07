<?php

use App\Http\Controllers\ZoomController;
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
Route::get('/create-meeting', [ZoomController::class, 'create_Meeting']);
Route::get('/update-meeting', [ZoomController::class, 'update_Meeting']);
Route::get('/delete-meeting', [ZoomController::class, 'delete_Meeting']);
Route::get('/get-meeting', [ZoomController::class, 'Get_Meeting']);
