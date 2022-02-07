<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use App\Models\Factura;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function facturas(){
        $sql = Factura::join("compra as c", "c.id", "factura.compra_id")
                        ->join("producto as p", "p.id", "c.producto_id")
                        ->join("users as u", "u.id", "c.users_id")
                        ->select("factura.estatus", "u.name as nombre", "p.nombre as n_producto", "p.valor as p_valor","c.*", "p.iva")
                        ->get();

        return view("app.list_facturas", compact("sql"));
    }
}
