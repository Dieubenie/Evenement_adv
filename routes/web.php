<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;

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

Route::get('Ajouter_categorie', [CategorieController::class, 'create'])->name('create_categorie');

Route::resource('gestion_categorie', CategorieController::class);

Route::get('supprimer_categorie/{id}', [CategorieController::class, 'destroy']);