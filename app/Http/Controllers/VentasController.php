<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function listarProductos()
    {
        $producto = DB::table('producto')->get()->toArray();
        return ($producto);
    }

    public function buscarCliente($dni)
    {
        $clienteEncontrado = DB::table('persona')->where('dni', $dni)->get()->toArray();
        return ($clienteEncontrado);
    }
}
