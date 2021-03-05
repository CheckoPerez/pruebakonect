@extends('layouts.app')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="container">
    <div class="flex space-x-12">
        <div><h1 class="h1">Esta es la pgina de los productos</h1></div>
        <div><a href="{{route('producto.create')}}" class="bg-green-500 hover:bg-green-700 text-white rounded py-2 px-2"><strong class="h2">+</strong></a></div>
    </div>
    
    <ul>
        <div class="grid grid-cols-2 ">
            @foreach($productos as $product)
            <li class="flex justify-between w-1/3 py-4">
                <div>{{$product->nombre}}</br>
                    ${{$product->precio}}<br>
                    {{$product->stock}} disponibles
                </div>
                <div>
                    <form method="GET" action="{{route('producto.edit', $product)}}">
                        @csrf
                        <input type="hidden" value="{{$product->id}}" name="id" id="id">
                        <input type="submit" class=" bg-yellow-500 hover:bg-yellow-700 text-white rounded" value="Editar">
                    </form>
                    <form method="POST" action="{{route('producto.destroy', $product)}}">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" value="{{$product->id}}" name="id" id="id">
                        <input type="submit" class=" bg-red-500 hover:bg-red-700 text-white rounded" value="Eliminar">
                    </form>
                </div>
            </li>
            @endforeach
        </div>

    </ul>
    {{$productos->links()}}
</div>


@endsection
