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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('index');

Route::resource('usuarios', App\Http\Controllers\UserController::class)->middleware('auth')->names('users');
Route::get('/leer-todas-las-notificaciones', [App\Http\Controllers\AuthController::class, 'readAllNotifications'])->middleware('auth')->name('read-all-notifications');
Route::post('/leer-notificacion/{id}', [App\Http\Controllers\AuthController::class, 'readNotification'])->middleware('auth')->name('read-notification');
