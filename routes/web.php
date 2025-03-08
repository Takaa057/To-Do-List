<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListDataController;
use App\Http\Controllers\TaskController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'index']);
Route::post('/', [AuthController::class, 'login']);
// route::get('/list', [ListDataController::class, 'index'])->name('list.index');

// route::get('list/create', [ListDataController::class, 'create'])->name('list.create');

// Route::post('/list/store', [ListDataController::class, 'store'])->name('list.store');

// Route::get('/list/edit/{id}' , [ListDataController::class , 'edit'])->name('list.edit');

// // Route::post('/list/update/{id}' , [ListDataController::class , 'update'])->name('list.update');

// Route::put('/list/{listData}', [ListDataController::class, 'update'])->name('list.update');

// Route::post('/list/destroy/{id}' , [ListDataController::class , 'destroy'])->name('list.destroy');


Route::resource('list', ListDataController::class);

Route::resource('task', TaskController::class);