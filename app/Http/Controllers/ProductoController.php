<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto=Producto::all();
        return view('Producto.index')->with('producto',$producto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        
        $producto->nombre = $request->get('nombre');
        $producto->referencia = $request->get('referencia');
        $producto->precio = $request->get('precio');
        $producto->peso = $request->get('peso');
        $producto->categoria = $request->get('categoria');
        $producto->stock = $request->get('stock');
        $producto->fecha = $request->get('fecha');
        
        $producto->save();

        return redirect('/Producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('Producto.edit')->with('producto',$producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        
        $producto->nombre = $request->get('nombre');
        $producto->referencia = $request->get('referencia');
        $producto->precio = $request->get('precio');
        $producto->peso = $request->get('peso');
        $producto->categoria = $request->get('categoria');
        $producto->stock = $request->get('stock');
        $producto->fecha = $request->get('fecha');

        $producto->save();

        return redirect('/Producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect('/Producto');
    }
}
