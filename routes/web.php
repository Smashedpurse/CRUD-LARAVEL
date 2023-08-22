<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\contactUsController;

/*HOME*/

Route::controller(HomeController::class)->group(function () {

    //RUTA PARA ACCESO AL HOME
    Route::get('/', 'index')->name('index');
    //RUTA PARA ACCESO A LA VISTA DEL PRODUCTO {}
    Route::get('/home/productView/{id}', 'show')->name('products.show');
});
/*LOGIN*/
Route::controller(LoginController::class)->group(function () {
    // RUTA PARA EL LOGIN
    Route::get('/login', 'index');
});
/*ADMIN*/
Route::controller(AdminController::class)->group(function () {
    //VISTA DE PERFIL DEL ADMIN {}
    Route::get('/adminProfile', 'index');
    //RUTA PARA LA VISTA DE FORMULARIO
    Route::get('/createProduct', 'create')->name('products.create');
    //RUTA PARA EL ENVÍO DE INFORMACIÓN DEL FORMULARIO
    Route::post('/create', 'store')->name('products.store');
    //RUTA PARA OBTENER EL PRODUCTO
    Route::get('/home/productView/{id}/edit', 'edit')->name('products.edit');
    //RUTA PARA MODIFICAR EL PRODUCTO
    Route::put('/edit/{product}', 'update')->name('products.update');
    //RUTA PARA ELIMINAR EL PRODUCTO
    Route::delete('/delete/{product}', 'destroy')->name('products.delete');
});
    /*CONTACT*/
    Route::controller(contactUsController::class)->group(function () {
        Route::get('/contactUs','index')->name('contactUs.index');
        Route::post('/contactUs','store')->name('contactUs.store');
    });
