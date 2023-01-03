@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>COMPRAR Artículo</h1>
@stop

@section('content')
<form action="/Compras" method="POST">
   @csrf

  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo"  readonly onmousedown="return false;" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" readonly onmousedown="return false;" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad"  readonly onmousedown="return false;" name="cantidad" type="number" class="form-control" value="{{$articulo->cantidad}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" readonly onmousedown="return false;"  name="precio" type="number" step="any" class="form-control" value="{{$articulo->precio}}">
  </div>
  <a href="/Compras" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-success">Comprar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
