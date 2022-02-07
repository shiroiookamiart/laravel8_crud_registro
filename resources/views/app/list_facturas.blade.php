@extends('layouts.app')

@section('content')
<div class="container">
    @if (\Session::has('success'))
        <div class="alert alert-success">
            {!! \Session::get('success') !!}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table table-striped"  >
                <tr>
                    <td>id</td>
                    <td>nombre cliente</td>
                    <td>nombre producto</td>
                    <td>valor del producto</td>
                    <td>impuesto</td>
                    <td>valor total</td>
                    <td>Estatus</td>
                    <td>Acciones</td>
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
                            <td><a href="{{ url('/generar-factura/'.$row->id) }}" class="btn btn-primary">Generar</a></td>
                        </tr>
                        @endforeach
                    @endif
                @endif
            </table>
        </div>
    </div>
</div>
@endsection
