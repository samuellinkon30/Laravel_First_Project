<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

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

//Configuração de Rota dependendo da configuração http recebida
//Podendo receber Post, Delet...
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function(){
//     echo "Página Home";
// });

Route::get('/series',[SeriesController::class, 'listarsereies']);