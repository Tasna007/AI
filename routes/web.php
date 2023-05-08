<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UtilisateurController;
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

// Route::get('^/[a-z].html$', function () { return view('Accueil'); });
// Route::get('/la-disparition-de-je-ne-sais-pas', [C_Categorie::class, 'goToAddArticle'])->name('C_Categorie.routeAddArticle');
// Route::get('/addArticle', [C_Categorie::class, 'goToAddArticle'])->name('categorie.addArticle');

// Route::post('/lien',[NomControlleur::class,'NomFonction']);

Route::view('/adminLog','Admin.login');
Route::view('/','User.accueil');
Route::post('/login',[AdminController::class,'login']);
Route::get('/list',[UtilisateurController::class,'list']);
Route::post('/insertArticle',[AdminController::class,'insertArticle']);
Route::get('/details/{slug}-{id}.tsx', [UtilisateurController::class,'details'])->where(['slug' => '([a-zA-Z0-9\-]+)']);
