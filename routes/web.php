<?php

use Illuminate\Support\Facades\Route;

Route::name('index')-> get('/', 'App\Http\Controllers\examen_controller@index');

Route::name('empleados')-> get('empleados/', 'App\Http\Controllers\examen_controller@empleados');

Route::name('foto_tienda')-> get('foto_tienda/', 'App\Http\Controllers\examen_controller@foto_tienda');

Route::name('foto_empleado')-> get('foto_empleado/', 'App\Http\Controllers\examen_controller@foto_empleado');

Route::name('producto')-> get('producto/', 'App\Http\Controllers\examen_controller@producto');

Route::name('crear_venta')-> get('crear_venta/', 'App\Http\Controllers\examen_controller@crear_venta');