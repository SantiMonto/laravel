<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter\Index as Counter;
use App\Livewire\Courses\Create;
use App\Livewire\Courses\Edit;
use App\Livewire\Courses\Index;
use App\Livewire\Courses\Show;

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

Route::get('/', HomeController::class)->name('home');
Route::get('/counter', Counter::class)->name('counter');
Route::get('/cursos',Index::class)->name('courses.index');
Route::get('/cursos/create',Create::class)->name('courses.create');
Route::get('/cursos/{curso}/edit',Edit::class)->name('courses.edit');
Route::get('/cursos/{curso}/{categoría?}',Show::class)->name('courses.show');


// Route::controller(CursoController::class)->group(function () {
//     Route::get('cursos', 'index')->name('cursos.index');
//     Route::get('cursos/create', 'create')->name('cursos.create');
//     Route::post('cursos', 'store')->name('cursos.store');
//     Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
//     Route::get('cursos/{curso}/{categoría?}', 'show')->name('cursos.show');
//     Route::put('cursos/{curso}', 'update')->name('cursos.update');
//     Route::delete('cursos/{curso}', 'destroy')->name('cursos.destroy');
// });

// Route::resource('cursos', CursoController::class);