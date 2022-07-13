<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CatController;

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

Route::get('/', function(){
    return view('home');
});

Route::get('/cat', [CatController::class, 'index']);

Route::get('/todo', [TodoController::class, 'index']);

Route::get('/cat/create', [CatController::class, 'create']);

Route::get('/todo/create', [TodoController::class, 'create']);

Route::post('/cat/store-data', [CatController::class, 'store'])->name('cat.store');

Route::post('/todo/store-data', [TodoController::class, 'store'])->name('todo.store');

Route::get('/cat/details/{cat}', [CatController::class, 'details']);

Route::get('/todo/details/{todo}', [TodoController::class, 'details']);

Route::get('/cat/edit/{cat}', [CatController::class, 'edit']);

Route::get('/todo/edit/{todo}', [TodoController::class, 'edit']);

Route::post('/cat/update/{cat}', [CatController::class, 'update']);

Route::post('/todo/update/{todo}', [TodoController::class, 'update']);

Route::get('/cat/delete/{cat}', [CatController::class, 'delete']);

Route::get('/todo/delete/{todo}', [TodoController::class, 'delete']);
