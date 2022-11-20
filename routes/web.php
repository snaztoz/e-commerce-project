<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkspacesController;
use App\Http\Controllers\ProjectTypesController;

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

Route::resource('workspace', WorkspacesController::class);
Route::get('/workspace/create', [WorkspacesController::class, 'create']);
Route::post('/workspace/store', [WorkspacesController::class, 'store']);

Route::resource('types', ProjectTypesController::class);
Route::get('/types/create', [ProjectTypesController::class, 'create']);
Route::post('/types/store', [ProjectTypesController::class, 'store']);

require __DIR__.'/auth.php';
