<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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

/*HOME*/
Route::controller(HomeController::class)->group(function(){
    
    //RUTA PARA ACCESO AL HOME
    Route::get('/home','index')->name('index');
    //RUTA PARA ACCESO A LA VISTA DEL PRODUCTO {}
    Route::get('/home/productView/{id}','show')->name('products.show');
});

/*LOGIN*/
Route::controller(LoginController::class)->group(function(){
    // RUTA PARA EL LOGIN
    Route::get('/login','index');    
});


/*ADMIN*/
Route::controller(AdminController::class)->group(function(){
    //VISTA DE PERFIL DEL ADMIN {}
    Route::get('/adminProfile','index');    
    //RUTA PARA LA VISTA DE FORMULARIO
    Route::get('/createProduct','create')->name('products.create');
    //RUTA PARA EL ENVÍO DE INFORMACIÓN DEL FORMULARIO
    route::post('/create','store')->name('products.store');
    //RUTA PARA OBTENER EL PRODUCTO
    Route::get('/home/productView/{id}/edit','edit')->name('products.edit');
    //RUTA PARA MODIFICAR EL PRODUCTO
    Route::put('/edit/{product}','update')->name('products.update');
    //RUTA PARA ELIMINAR EL PRODUCTO
    Route::delete('/delete/{product}','destroy')->name('products.delete');
});
