@extends('principal')

@section('contenido')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Productos</h3> <br>
    </div>
    <div class="row">
        <form style="padding:20px" name="frmRegistrar" method="POST" action="{{ url('/producto/guardar')}}">
            @csrf
            <div class="form-group">
                <label for="codigo">Codigo: </label>
                <input type="text" id="codigo" name="codigo">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="nombre">
            </div>
            
            <div class="form-group">
                <label for="precio">Precio: </label>
                <input type="text" id="precio" name="precio">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</div>
@endsection