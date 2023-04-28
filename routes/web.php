<?php

use App\Http\Controllers\CheckController;
use App\Http\Controllers\PadronesController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChartController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermisionController;

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
    return redirect()->route('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        //llamar a consultar padron
         //Por Local de votación
         $l1=DB::table('checks')->where("id_user","=","1")->get();
         $local1=$l1->count();
 
         $l2=DB::table('checks')->where("id_user","=","2")->get();
         $local2=$l2->count();
 
         $l3=DB::table('checks')->where("id_user","=","3")->get();
         $local3=$l3->count();
 
         $l4=DB::table('checks')->where("id_user","=","4")->get();
         $local4=$l4->count();
 
         $l5=DB::table('checks')->where("id_user","=","5")->get();
         $local5=$l5->count();
 
         $l6=DB::table('checks')->where("id_user","=","6")->get();
         $local6=$l6->count();
 
         $l7=DB::table('checks')->where("id_user","=","7")->get();
         $local7=$l7->count();
 
         $l8=DB::table('checks')->where("id_user","=","8")->get();
         $local8=$l8->count();
 
         $l9=DB::table('checks')->where("id_user","=","9")->get();
         $local9=$l9->count();
 
         $l10=DB::table('checks')->where("id_user","=","10")->get();
         $local10=$l10->count();
 
         $l11=DB::table('checks')->where("id_user","=","11")->get();
         $local11=$l11->count();
 
         $l12=DB::table('checks')->where("id_user","=","12")->get();
         $local12=$l12->count();
 
         
         //fraudes por seccional
         $frad1 = DB::table('checks')->where("id_user","=","1")->sum('contador');
         $fraudes1 = intval($frad1) - intval($local1);
 
         $frad2 = DB::table('checks')->where("id_user","=","2")->sum('contador');
         $fraudes2 = intval($frad2) - intval($local2);
 
         $frad3 = DB::table('checks')->where("id_user","=","3")->sum('contador');
         $fraudes3 = intval($frad3) - intval($local3);
 
         $frad4 = DB::table('checks')->where("id_user","=","4")->sum('contador');
         $fraudes4 = intval($frad4) - intval($local4);
 
         $frad5 = DB::table('checks')->where("id_user","=","5")->sum('contador');
         $fraudes5 = intval($frad5) - intval($local5);
 
         $frad6 = DB::table('checks')->where("id_user","=","6")->sum('contador');
         $fraudes6 = intval($frad6) - intval($local6);
 
         $frad7 = DB::table('checks')->where("id_user","=","7")->sum('contador');
         $fraudes7 = intval($frad7) - intval($local7);
 
         $frad8 = DB::table('checks')->where("id_user","=","8")->sum('contador');
         $fraudes8 = intval($frad8) - intval($local8);
 
         $frad9 = DB::table('checks')->where("id_user","=","9")->sum('contador');
         $fraudes9 = intval($frad9) - intval($local9);
 
         $frad10 = DB::table('checks')->where("id_user","=","10")->sum('contador');
         $fraudes10 = intval($frad10) - intval($local10);
 
         $frad11 = DB::table('checks')->where("id_user","=","11")->sum('contador');
         $fraudes11 = intval($frad11) - intval($local11);
 
         $frad12 = DB::table('checks')->where("id_user","=","12")->sum('contador');
         $fraudes12 = intval($frad12) - intval($local12);
         $user = Auth::user();
         
         //return $local3;
        return view('padron.index', compact('user','local1','local2','local3','local4','local5','local6',
        'local7','local8','local9','local10','local11','local12','fraudes1','fraudes2','fraudes3',
        'fraudes4','fraudes5','fraudes6','fraudes7','fraudes8','fraudes9','fraudes10','fraudes11','fraudes12'));
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth:sanctum', 'verified'])->resource('padron',PadronesController::class)->names('padron');

Route::middleware(['auth:sanctum', 'verified'])->resource('user',UserController::class)->only(['index','edit','update','show','destroy','create','store'])->names('user');
Route::middleware(['auth:sanctum', 'verified'])->resource('check',CheckController::class)->names('check');
Route::middleware(['auth:sanctum', 'verified'])->post('consultarPadron', [PadronesController::class,'consultarPadron'])->name('consultarPadron');
Route::middleware(['auth:sanctum', 'verified'])->post('checkearVotante', [CheckController::class,'check'])->name('checkearVotante');
Route::middleware(['auth:sanctum', 'verified'])->resource('roles',RoleController::class)->names('roles');
Route::middleware(['auth:sanctum', 'verified'])->resource('permisos',PermisionController::class)->names('permisos');

Route::middleware(['auth:sanctum', 'verified'])->resource('charts',ChartController::class)->names('charts');
Route::middleware(['auth:sanctum', 'verified'])->resource('padron',PadronesController::class)->names('padron');
Route::middleware(['auth:sanctum', 'verified'])->resource('lista',ListaController::class)->names('lista');
