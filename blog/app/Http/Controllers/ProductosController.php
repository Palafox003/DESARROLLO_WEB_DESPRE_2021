<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Marca;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos=Producto::all();

        return view('productos.productos',['productos'=>$productos]);
    }

    public function buscar(Request $request){
        $buscar=$request->buscar;

        $productos=Producto::where('nombre','like',$buscar)->get();

         return view('productos.productos',['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $marcas=Marca::all();

        return view('productos.nuevoProducto',['marcas'=>$marcas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $path = $request->file('img')->store('productos');

        $producto=new Producto;
            $producto->nombre=$request->nombre;
            $producto->marca_id=$request->marca;
            $producto->descripcion=$request->descripcion;
            $producto->costo=$request->costo;
            $producto->img=$path;
        $producto->save();

        return $request;
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
        //
        $producto=Producto::find($id);

        return view('productos.EditarProducto',['producto'=>$producto]);
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
        //
        $producto=Producto::find($id);
            $producto->nombre=$request->nombre;
            $producto->marca=$request->marca;
            $producto->descripcion=$request->descripcion;
            $producto->costo=$request->costo;
        $producto->save();

        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto=Producto::find($id);
            $producto->delete();

        return redirect('/productos');
    }
}
