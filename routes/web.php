<?php

use App\Http\Controllers\categoriaController;
use App\Http\Controllers\loginController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[loginController::class,'validar_session']);//definir una ruta y mandar al controlador loginController
Route::get('login',[loginController::class,'index']);//definir una ruta y mandar al controlador loginController
Route::get('users/list',[loginController::class,'mostrar_usuarios']);
Route::get('home',[loginController::class,'menu']);

Route::controller(categoriaController::class)->group(function(){
    Route::get('categories','mostrar_categorias');
    Route::get('category/{id}/features','mostrar_form');
});


/* Route::get('users/list{id}', function ($id) {
    return "PAGINA DE NAVEGACION $id";
});

Route::get('home', function ($id) {
    return "PAGINA DE NAVEGACION $id";
});
Route::get('home', function ($id) {
    return "PAGINA DE NAVEGACION $id";
});

 */


