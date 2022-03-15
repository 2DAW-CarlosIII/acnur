<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\donaciones;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('admin/catalog', function() {
    // Solo se permite el acceso a usuarios autenticados
})->middleware('auth');

// Para proteger una acción de un controlador:
Route::get('profile', [ProfileController::class, 'show'])->middleware('auth');

Route::group(['middleware' => 'auth'], function() {
    Route::get('donacion', [DonacionesController::class, 'getIndex']);
    Route::get('donacion/create', [DonacioneController::class, 'getCreate']);
    // ...
});
