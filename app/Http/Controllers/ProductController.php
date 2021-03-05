<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> 'required',
            'categoria'=> 'required',
            'referencia'=> 'required',
            'precio'=> 'required',
            'peso'=> 'required',
            'stock'=> 'required',
            ]);
        $product = new Product();
        $product->nombre = $request->nombre;
        $product->categoria = $request->categoria;
        $product->referencia = $request->referencia;
        $product->precio = $request->precio;
        $product->peso = $request->peso;
        $product->stock = $request->stock;
        $product->fecha_ultimaventa = null;
        $product->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, Request $request)
    {
        $product = Product::find($request->id);
        return view('admin.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request)
    {
        $request->validate([
            'nombre'=> 'required',
            'categoria'=> 'required',
            'referencia'=> 'required',
            'precio'=> 'required',
            'peso'=> 'required',
            'stock'=> 'required',
            ]);
        $product = Product::find($request->id);
        $product->nombre = $request->nombre;
        $product->categoria = $request->categoria;
        $product->referencia = $request->referencia;
        $product->precio = $request->precio;
        $product->peso = $request->peso;
        $product->stock = $request->stock;
        $product->save();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, Request $request)
    {
        Product::find($request->id)->delete();
        return redirect()->route('home');
    }

    public function comprar($id)
    {
        $product = Product::find($id);
        $product->stock = $product->stock - 1;
        $product->fecha_ultimaventa = Carbon::now();
        $product->save();
        return redirect()->back();;
    }
}
