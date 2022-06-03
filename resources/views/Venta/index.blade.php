@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>VENDER PRODUCTO</h1>
@stop

@section('content')

        <div class="col-lg-6">
            <form action="{{ route ('Producto.index')}}" method="GET">
              <div class="input-group">
                 <input type="text" class="form-control" name="texto" value="{{$texto}}">
                 <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Buscar</button>
                 </span>
             </div>
        </div>

    <table class="table table-dark table-striped mt-4">
       <thead>
           <tr> 
              <th scope="col">ID</th>
              <th scope="col">Nombre de producto:</th>
              <th scope="col">Precio</th>
              <th scope="col">Stock</th>
              <th scope="col">Acciones</th>
           </tr>
       </thead>
      
       <tbody>     
        @foreach ($venta as $ventas) 
           <tr> 
              <td>{{$ventas->id}}</td>
              <td>{{$ventas->nombre}}</td>
              <td>{{$ventas->precio}}</td>
              <td>{{$ventas->stock}}</td>
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