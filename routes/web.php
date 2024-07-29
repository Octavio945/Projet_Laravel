<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorieController;

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
// Route pour la page Liste des Produits
Route::get('/', [ProductController::class, 'liste_product']);

// les route pour la pages Ajout produit
Route::get('/ajouter', [ProductController::class, 'ajouter_product']);
Route::post('/ajouter/traitement', [ProductController::class, 'ajouter_product_traitement']);

// les route pour la pages  Ajout  Categorie
Route::get('/categorie', [CategorieController::class, 'liste_categorie']);
Route::get('/add_categorie', [CategorieController::class, 'add_categorie']);
Route::post('/add_categorie/traitement', [CategorieController::class, 'ajouter_categorie_traitement']);

//route pour les modifications
Route::get('/modifier-produit/{id}', [ProductController::class, 'modifier_product']);
Route::post('/modifier/traitement', [ProductController::class, 'modifier_product_traitement']);
Route::get('/modifier-categorie/{id}', [CategorieController::class, 'modifier_categorie']);
Route::post('/modifier_categorie/traitement', [CategorieController::class, 'modifier_categorie_traitement']);

//route pour les suppressions
Route::get('/supprimer-produit/{id}', [ProductController::class, 'supprimer_product']);
Route::get('/supprimer-categorie/{id}', [CategorieController::class, 'supprimer_categorie']);
