@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(Auth::user()->rol == 2)
            <table class="table table-striped"  >
                <tr>
                    <td>id</td>
                    <td>nombre</td>
                    <td>Precio</td>
                    <td>Impuesto</td>
                    <td>precio con Impuesto</td>
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
            <a href="{{ url('/facturas/') }}" class="btn btn-primary">Facturas</a>
        @endif
        </div>
    </div>
</div>
@endsection
