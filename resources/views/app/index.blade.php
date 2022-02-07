@extends('layouts.app')

@section('content')
<div class="container">
    @if(\Session::has('success'))
        <div class="alert alert-success">
            {!! \Session::get('success') !!}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-12">
        @if(Auth::user()->rol == 2)
            <table class="table table-striped"  >
                <tr>
                    <td>id</td>
                    <td>nombre</td>
                    <td>Precio</td>
                    <td>Impuesto</td>
                    <td>precio mas Impuesto</td>
                    <td>Acciones</td>
                </tr>
                @if(isset($sql))
                    @if(count($sql) > 0)
                        @foreach($sql as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->nombre}}</td>
                            <td>{{$row->valor}}</td>
                            <td>{{$row->iva}}%</td>
                            <td>{{ (($row->valor * $row->iva) / 100) + $row->valor }}</td>
                            <td><a href="{{ url('/comprar/'.$row->id) }}" class="btn btn-primary">Comprar</a></td>
                        </tr>
                        @endforeach
                    @endif
                @endif
            </table>
        @else
            <a href="{{ url('/generar-facturas/') }}" class="btn btn-primary">Generar facturas no emitidas</a>
            <br><br><br>
            <table class="table table-striped"  >
                <tr>
                    <td>id</td>
                    <td>nombre cliente</td>
                    <td>nombre producto</td>
                    <td>valor del producto</td>
                    <td>impuesto</td>
                    <td>valor total</td>
                    <td>Estatus</td>
                </tr>
                @if(isset($sql))
                    @if(count($sql) > 0)
                        @foreach($sql as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->nombre}}</td>
                            <td>{{$row->n_producto}}</td>
                            <td>{{$row->p_valor}}</td>
                            <td>{{$row->iva}}%</td>
                            <td>{{$row->total}}</td>
                            <td>
                                @if($row->estatus)
                                    Generada
                                @else
                                    No Generada
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    @endif
                @endif
            </table>
        @endif
        </div>
    </div>
</div>
@endsection
