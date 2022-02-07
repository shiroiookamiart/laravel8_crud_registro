<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Compra;
use App\Models\Factura;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sql = Producto::where("cantidad", ">", 0)->get();
        return view('app.index', compact('sql'));
    }

    public function compra($id){
        $productos = Producto::where("id", $id)->first();
        $total = ($productos->valor * $productos->iva) / 100;
        $total_g =  $productos->valor + $total;

        $save = array(
        'users_id' => Auth::user()->id,
        'producto_id' => $id,
        'cantidad' => 1,
        'total' => $total_g);

        $alm = new Compra($save);
        if($alm->save()){
            $cant = $productos->cantidad - 1;
            $act = array("cantidad" => $cant);
            Producto::where("id", $id)->update($act);

            $fact = array(
                'compra_id' => $alm->id,
                "estatus" => false);
            $facturas = new Factura($fact);
            $facturas->save();
        }

        return redirect("list-compras");
    }

    public function listCompra(){
        $sql = Compra::where("users_id", Auth::user()->id)
                        ->join("users as u", "u.id", "compra.users_id")
                        ->join("producto as p", "p.id", "compra.producto_id")
                        ->select("u.name as nombre", "p.nombre as n_producto", "p.valor as p_valor","compra.*", "p.iva")
                        ->get();
        return view("app.compra", compact("sql"));
    }

    public function listFacturas($id){
        $con = Compra::where("compra.id", $id)->where("users_id", Auth::user()->id)
        ->join("users as u", "u.id", "compra.users_id")
        ->join("producto as p", "p.id", "compra.producto_id")
        ->select("u.name as nombre", "p.nombre as n_producto", "p.valor as p_valor","compra.*")
        ->first();
        return view("app.factura", compact("con"));
    }

    public function genFactura($id){
        Factura::where("compra_id", $id)->update(array("estatus"=> true));
        return redirect()->back()->with('success', 'Factura Generada Correctamente');
    }
}
