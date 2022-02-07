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
        $sql = Factura::where("estatus", false)->update(array("estatus"=>true));

        return redirect()->back()->with('success', 'Facturas Generadas Correctamente');
    }
}
