<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Person;
use App\Http\Controllers\PersonController;
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

Route::get('/aaa', function() {
    return "<h2>Hola que tal mundo</h2>";
});

//Route::get('/ccc', [HolaController::mostrar()]);


Route::get('/todos', function () {
    $texto = "";
    $ar = User::all();
    $texto .= "<h2>Todos los nombres</h2>";
    foreach($ar as $reg){
            $texto .= "<p>$reg->name</p>";
    }
    return $texto;
});

Route::resource('persons', PersonController::class);
//Route::get('/persons', [PersonController::class,'index']);
