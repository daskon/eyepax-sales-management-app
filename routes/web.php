<?php

use App\Http\Controllers\TeamController;
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

Route::get('/',[TeamController::class, 'index'])
->name('view-team.show');

Route::post('/new-team',[TeamController::class, 'create'])
->name('new-team.create');

Route::get('/show-team/{id}',[TeamController::class, 'show'])
->name('show-team.show');

Route::get('/edit-team/{id}',[TeamController::class, 'edit'])
->name('edit-team.edit');

Route::post('/update-team',[TeamController::class, 'update'])
->name('update-team.update');