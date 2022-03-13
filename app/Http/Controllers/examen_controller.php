<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tiendas;
use App\Models\empleados;
use App\Models\productos;
use App\Models\ventas;

class examen_controller extends Controller
{
    public function index() {
        $tiendas=tiendas::all();
        $ventas = ventas::all();
        return view('venta')
        ->with(['ventas' => $ventas])
        ->with(['tiendas' => $tiendas]);

    }
    
    public function empleados(Request $request){
        $id_tienda = $request['id_tienda'];
        $empleados = empleados::select('*')->where('id_sucursal','=', $id_tienda)->get();
        return view('datos.empleados')
        ->with(['empleados' => $empleados]);        
    }

    public function foto_tienda (Request $request){
        $id_tienda = $request['id_tienda'];
        $tiendas = tiendas::select('*')->where('id_tiendas','=', $id_tienda)->get();
        return view('datos.foto_tienda')
        ->with(['tiendas' => $tiendas]);


    }

    public function foto_empleado (Request $request){
        $id_empleado = $request['id_empleado'];
        $empleados = empleados::select('*')->where('id_empleado','=', $id_empleado)->get();
        return view('datos.foto_empleado')
        ->with(['empleados' => $empleados]);
    }


    public function producto(Request $request){
        $id_tienda = $request['id_tienda'];
        $productos = productos::select('*')->where('id_sucursal', '=', $id_tienda )->get();
        return view('datos.producto')
        ->with(['productos' => $productos]);
    }

    public function crear_venta(Request $request)
    {
        $id_producto = $request['id_producto'];
        $productos = productos::select('*')->where('id_producto', '=', $id_producto)->get();
        return view('datos.crear_venta')
        ->with(['productos' => $productos]);
    }
}

