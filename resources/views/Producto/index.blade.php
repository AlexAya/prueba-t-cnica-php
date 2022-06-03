@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <a href="Producto/create" class="btn btn-danger">CREAR</a>



 <table class="table table-dark table-striped mt-4">
       <thead>
           <tr> 
              <th scope="col">ID</th>
              <th scope="col">Nombre de producto:</th>
              <th scope="col">Referencia</th>
              <th scope="col">Precio</th>
              <th scope="col">Peso</th>
              <th scope="col">Categoría</th>
              <th scope="col">Stock</th>
              <th scope="col">Fecha de creación</th>
              <th scope="col">Acciones</th>
           </tr>
       </thead>
      
       <tbody>     
        @foreach ($producto as $productos) 
           <tr> 
              <td>{{$productos->id}}</td>
              <td>{{$productos->nombre}}</td>
              <td>{{$productos->referencia}}</td>
              <td>{{$productos->precio}}</td>
              <td>{{$productos->peso}}</td>
              <td>{{$productos->categoria}}</td>
              <td>{{$productos->stock}}</td>
              <td>{{$productos->fecha}}</td>
              <td>
                  
                  <form action="{{ route ('Producto.destroy',$productos->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                     <a href="/Producto/{{$productos->id}}/edit" class="btn btn-info">EDITAR</a>
                     <button class="btn btn-danger">BORRAR</button>
                  </form>
              </td>      
           </tr>
        @endforeach
        </tbody>
      
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop