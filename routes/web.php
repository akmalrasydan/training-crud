<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
// Route::method('uri','action/callback')
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home:index');
//schadule/index.blade
Route::get('/schadules',[App\Http\Controllers\SchaduleController::class,'index'])->name('schadule:index')->middleware('auth');
//schadule/create.blade
Route::get('/schadules/create', [App\Http\Controllers\SchaduleController::class, 'create'])->name('schadule:create');
Route::post('/schadules/create', [App\Http\Controllers\SchaduleController::class, 'store'])->name('schadule:store');
//schadule/show.blade
Route::get('/schadules/{schadule}', [App\Http\Controllers\SchaduleController::class, 'show'])->name('schadule:show');
//schadule/edit.blade
Route::get('/schadules/{schadule}/edit', [App\Http\Controllers\SchaduleController::class, 'edit'])->name('schadule:edit');
Route::post('/schadules/{schadule}/edit', [App\Http\Controllers\SchaduleController::class, 'update'])->name('schadule:update');

Route::get('/schadules/{schadule}/delete', [App\Http\Controllers\SchaduleController::class, 'delete'])->name('schadule:delete');

//car
Route::get('/cars', [App\Http\Controllers\CarController::class, 'index'])->name('car:index');

Route::get('/cars/create', [App\Http\Controllers\CarController::class, 'create'])->name('car:create');
Route::post('/cars/create', [App\Http\Controllers\CarController::class, 'store'])->name('car:store');

Route::get('/cars/{car}', [App\Http\Controllers\CarController::class, 'show'])->name('car:show');

Route::get('/cars/{car}/edit', [App\Http\Controllers\CarController::class, 'edit'])->name('car:edit');
Route::post('/cars/{car}/edit', [App\Http\Controllers\CarController::class, 'update'])->name('car:update');

Route::get('/cars/{car}/delete', [App\Http\Controllers\CarController::class, 'delete'])->name('car:delete');


//IPT pulang
Route::get('/pulangs', [App\Http\Controllers\PulangController::class, 'index'])->name('pulang:index');

Route::get('/pulangs/create', [App\Http\Controllers\PulangController::class, 'create'])->name('pulang:create');
Route::post('/pulangs/create', [App\Http\Controllers\PulangController::class, 'store'])->name('pulang:store');

Route::get('/pulangs/{pulang}', [App\Http\Controllers\PulangController::class, 'show'])->name('pulang:show');

Route::get('/pulangs/{pulang}/edit', [App\Http\Controllers\PulangController::class, 'edit'])->name('pulang:edit');
Route::post('/pulangs/{pulang}/edit', [App\Http\Controllers\PulangController::class, 'update'])->name('pulang:update');

Route::get('/pulangs/{pulang}/delete', [App\Http\Controllers\PulangController::class, 'delete'])->name('pulang:delete');


