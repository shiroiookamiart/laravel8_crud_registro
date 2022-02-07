@extends('layouts.app')

@section('content')
<div class="container">
    @if (\Session::has('success'))
        <div class="alert alert-success">
            {!! \Session::get('success') !!}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <center>
                <h6>Nombre Cliente: {{$con->nombre}}</h6>
                <h6>Nombre Producto: {{$con->n_producto}}</h6>
                <h6>Cantidad: 1</h6>
                <h6>Total: {{$con->total}}</h6>
                <br>
                @if(Auth::user()->rol == 1)
                    <a href="{{ url('/') }}" class="btn btn-primary">Regresar</a>
                @else
                    <a href="{{ url('/list-compras') }}" class="btn btn-primary">Regresar</a>
                @endif
                <a href="{{ url('/generar-factura/'.$con->id) }}" class="btn btn-primary">Generar</a>
            </center>
        </div>
    </div>
</div>
@endsection
