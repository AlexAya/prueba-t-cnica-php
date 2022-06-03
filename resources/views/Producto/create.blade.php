@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CREAR PRODUCTO</h1>

    <form action="/Producto" method="POST">
      @csrf
       <div class="mb-3">
          <label for="" class= "form-label">Nombre de producto:</label>
          <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
       </div>
       <div class="mb-3">
          <label for="" class= "form-label">Referencia</label>
          <input id="referencia" name="referencia" type="text" class="form-control" tabindex="2">
       </div>
       <div class="mb-3">
          <label for="" class= "form-label">Precio</label>
          <input id="precio" name="precio" type="int" class="form-control" tabindex="3">
       </div>
       <div class="mb-3">
          <label for="" class= "form-label">Peso</label>
          <input id="peso" name="peso" type="int" class="form-control" tabindex="4">
       </div>
       <div class="mb-3">
            <label for="" class= "form-label">Categoría:</label>
            <select class="form-control" id="categoria" name="categoria" type="text" class="form-control" tabindex="5">
                <option>Panaderia</option>
                <option>Pasteleria</option>
                <option>Bebidas</option>
                <option>Snacks</option>
            </select>
       </div>
       <div class="mb-3">
          <label for="" class= "form-label">Stock</label>
          <input id="stock" name="stock" type="int" class="form-control" tabindex="6">
       </div>
       <div class="mb-3">
          <label for="" class= "form-label">Fecha de creación:</label>
          <input id="fecha" name="fecha" type="text" class="form-control" tabindex="7">
       </div>
      
          <a href="/Producto" class="btn btn-danger" tabindex="6">CANCELAR</a>
          <button type="submit" class="btn btn-danger" tabindex="5">GUARDAR</button>
       </div>

    </form>
@stop