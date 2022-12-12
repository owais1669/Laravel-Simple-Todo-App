<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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

Route::get('/', [TodoController::class, 'index']);
//show single record
Route::get('/todo/{id}', [TodoController::class, 'show']);
//create a record
Route::get('/create', [TodoController::class, 'create']);
//store record in database
Route::post('/create', [TodoController::class, 'store']);
// edit page route
Route::get('/todo/{id}/edit', [TodoController::class, 'edit']);
Route::post('/todo/{id}/update' ,[TodoController::class, 'update']);

//delete single todo record
Route::post('todo/{id}/destroy', [TodoController::class, 'destroy']);
