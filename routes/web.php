<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
Route::get('admin',[AdminController::class,'loginPage']);
Route::post('adminStore',[AdminController::class,'adminStore'])->name('admin.store');

Route::get('gerantstore',[AdminController::class,'gerantstore'])->name('gerantstore');
Route::post('gerantStore',[AdminController::class,'gerantStore'])->name('gerant.store');
// Route::get('tableau',[AdminController::class,'tableauPage']);
Route::get('Ajout',[AdminController::class,'Ajout'])->name('Ajout');
Route::post('Ajout',[AdminController::class,'AjoutTraitement'])->name('ajout');
Route::get('produitliste',[AdminController::class,'listeproduit'])->name('produitliste');
Route::post('produitliste',[AdminController::class,'produitStore'])->name('produit.store');









// Route::get('admin',[registerController::class,'adminRegister']);
 //Route::post('adminStore',[registerController::class,'adminStore'])->name('admin.store');
// Route::post('managerStore',[registerController::class,'managerStore'])->name('manager.store');
// Route::get('manager',[registerController::class,'managerRegister']);
// Route::get('client',[registerController::class,'clientRegister']);
// Route::post('clientStore',[registerController::class,'clientStore'])->name('client.store');

// Route::get('login',[loginController::class,'loginPage']);
// Route::post('loginUser',[loginController::class,'loginUser'])->name('login.user');


