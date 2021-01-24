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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TaskController::class, 'index']);
Route::get('tasks/{task}', [TaskController::class, 'show']);
Route::get('new-task', [TaskController::class, 'create']);
Route::post('store-tasks', [TaskController::class, 'store']);

Route::get('tasks/{task}/edit', [TaskController::class, 'edit']);
Route::post('tasks/{task}/update-task', [TaskController::class, 'update']);

Route::get('tasks/{task}/delete', [TaskController::class, 'destroy']);

Route::get('tasks/{task}/complete', [TaskController::class, 'complete']);
