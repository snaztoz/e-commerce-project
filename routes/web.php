<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliographiesController;

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

Route::get(
    '/',
    function () {
        return view('welcome');
    }
);

Route::get(
    '/dashboard',
    function () {
        return view('dashboard');
    }
)->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('bibliographies', BibliographiesController::class);
Route::get('/bibliographies/create',[BibliographiesController::class, 'create']);
Route::post('/bibliographies/store',[BibliographiesController::class, 'store']);
Route::get('/bibliographies/destroy/{id}',[BibliographiesController::class, 'destroy']);

require __DIR__.'/auth.php';
