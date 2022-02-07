@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped"  >
                <tr>
                    <td>id</td>
                    <td>nombre cliente</td>
                    <td>nombre producto</td>
                    <td>valor del producto</td>
                    <td>impuesto</td>
                    <td>valor total</td>
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
                            <td><a href="{{ url('/imprimir/'.$row->id) }}" class="btn btn-primary">Imprimir</a></td>
                        </tr>
                        @endforeach
                    @endif
                @endif
            </table>
        </div>
    </div>
</div>
@endsection
