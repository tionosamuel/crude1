<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\StudentController;

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

Route::get('/test', function () {
    return view('test');
});
Route::get('/register',[adminController::class, 'from_register'])->name('register'); 
Route::post('/register',[adminController::class, 'traitement_register'])->name('register');

Route::get('/login',[adminController::class, 'from_login']);
Route::post('/login',[adminController::class, 'traitement_login'])->name('login');
Route::get('/espace-membre',function() {return view('espacemembre'); });

Route::get('/logout',[adminController::class, 'logout']); 

// Route::get('/logout',[adminController::class, 'retour'])->name('retour');

Route::resource('students', StudentController::class);
