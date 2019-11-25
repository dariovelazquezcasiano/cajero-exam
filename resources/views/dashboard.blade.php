@extends('layouts.app')

@section('titulo')
    Cajero | Panel
@endsection

@section('contenido')
<div class="container-fluid bg">
    <br>
    <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-6">
            <div class="form-group">
            <label>Vienvenodo {{ Auth::user()->name }}</label>
            </div>
            <form method="POST" action=" {{ route('logout') }}">
                {{ csrf_field() }}
                    <button class="btn btn-danger">Cerrar Sesion</button>
                
            </form>

        </div>
    </div>
</div>
@endsection      