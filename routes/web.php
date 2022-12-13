<?php

use App\Http\Controllers\CheckController;
use App\Http\Controllers\PadronesController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChartController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->resource('user',UserController::class)->only(['index','edit','update','show','destroy','create','store'])->names('user');
Route::middleware(['auth:sanctum', 'verified'])->resource('padron',PadronesController::class)->names('padron');
Route::middleware(['auth:sanctum', 'verified'])->resource('check',CheckController::class)->names('check');
Route::middleware(['auth:sanctum', 'verified'])->post('consultarPadron', [PadronesController::class,'consultarPadron'])->name('consultarPadron');
Route::middleware(['auth:sanctum', 'verified'])->post('checkearVotante', [CheckController::class,'check'])->name('checkearVotante');

Route::middleware(['auth:sanctum', 'verified'])->resource('charts',ChartController::class)->names('charts');
Route::middleware(['auth:sanctum', 'verified'])->resource('padron',PadronesController::class)->names('padron');
Route::middleware(['auth:sanctum', 'verified'])->resource('lista',ListaController::class)->names('lista');
