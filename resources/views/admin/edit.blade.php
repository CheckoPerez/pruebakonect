@extends('layouts.app')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <h1 class="h1">Editar producto</h1></br>
    <form method="POST" action="{{route('producto.update', $product)}}">
      @csrf
      @method('PUT')
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Nombre del Producto
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" value="{{$product->nombre}}" name="nombre">
        @error('nombre')
        <p class="text-red text-xs italic text-red-700">Por favor indique el nombre del producto</p>
        @enderror
      </div>
      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-cat-name">
        Categoria
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-cat-name" type="text" value="{{$product->categoria}}" name="categoria">
        @error('categoria')
        <p class="text-red text-xs italic text-red-700">Por favor indique una categoria</p>
        @enderror
      </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-ref">
          Referenica
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-ref" type="text" value="{{$product->referencia}}" name="referencia">
        @error('referencia')
        <p class="text-red text-xs italic text-red-700">Por favor indique una referencia</p>
        @enderror
      </div>
    </div>
    <div class="-mx-3 md:flex mb-2">
      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-precio">
          Precio
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-precio" type="number" value="{{$product->precio}}" name="precio">
        @error('precio')
        <p class="text-red text-xs italic text-red-700">Por favor indique el precio del producto</p>
        @enderror
      </div>
      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-peso">
          Peso
        </label>
        <div class="relative">
          <input type="number" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-peso" value="{{$product->peso}}" name="peso">
          @error('peso')
          <p class="text-red text-xs italic text-red-700">Por favor indique el peso del producto</p>
          @enderror
        </div>
      </div>
      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-stock">
          Stock
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-stock" type="number" value="{{$product->stock}}" name="stock">
        @error('stock')
        <p class="text-red text-xs italic text-red-700">Por favor indique la cantidad de stock del producto</p>
        @enderror
      </div>
    </div>
</div>
<div class="flex flex-row-reverse space-x-4 space-x-reverse">
  <div class="inline-block w-1/2">
    <input type="hidden" value="{{$product->id}}" name="id" id="id">
    <input type="submit" class=" bg-blue-500 hover:bg-blue-700 text-white rounded appearance-none   rounded py-3 px-4" value="Guardar">
    </form>
    <div class="inline-block w-1/2">
      <form method="POST" action="{{route('producto.destroy', $product)}}">
        @method('DELETE')
        @csrf
        <input type="hidden" value="{{$product->id}}" name="id" id="id">

        <input type="submit" class=" bg-red-500 hover:bg-red-700 text-white rounded appearance-none rounded py-3 px-4" value="Eliminar">
      </form>
    </div>
  </div>
</div>
  @endsection