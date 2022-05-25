<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', [TaskController::class, 'index'])
        ->name('read tasks');

Route::get('create/', [TaskController::class, 'create'])
        ->name('create tasks');
Route::post('store/', [TaskController::class, 'store'])
        ->name('store tasks');
Route::get('{id}/edit', [TaskController::class, 'edit'])
        ->name('edit tasks');
Route::put('update/{id}', [TaskController::class, 'update'])
        ->name('update tasks');
Route::delete('destroy/{id}', [TaskController::class, 'destroy'])
        ->name('destroy tasks');

