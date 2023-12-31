@extends('adminlte::page')

@section('title', 'Encargados')

@section('content_header')
    <h1>Encargado: {{$encargado->ENCARGADO_NOMBRE}} </h1>
@stop

@section('content')

<div class="container">
    <div class="row">

        <div class="col col-md-12">
            <a class="btn btn-primary" href="{{ route('encargados') }}"> {{ __('Volver') }}</a>
            <div class="card">
                <div class="card-header">
                    <h4><b>Datos Asociados</b> </h4>
                </div>
          </div>
       </div>
    </div>

    <div class="row">
        <div class="col col-lg-12 w-100">
            <div class="card p-5">
                <form>
                    <div class="row">
                        <div class="co col-md-12">
                            <div class="form">
                                <span class="block">Telefono: </span>
                                <label>{{$encargado->ENCARGADO_TELF}} </label><br>
                                <span class="block">Correo: </span>
                                <label>{{$encargado->ENCARGADO_CORREO}}</label><br>
                                <span class="block">Cliente: </span>
                                <label>{{$cliente->nombre}}</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@stop

@section('css')
@stop

@section('js')
    {{-- <script> alert('Hi!'); </script> --}}
@stop
