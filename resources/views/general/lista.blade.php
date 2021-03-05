@extends('layouts.app')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="container">
    <h1 class="h1">Esta es la pgina de los productos</h1>
    <ul>
        <div class="grid grid-cols-2 ">@foreach($productos as $product)
            <li>
                @if($product->stock > 0)
                <div>{{$product->nombre}}</br>
                    ${{$product->precio}}<br>
                    {{$product->stock}} disponibles
                </div>
                <div>
                    <a href="{{route('producto.comprar', $product->id)}}" class="bg-green-500 hover:bg-green-700 text-white rounded" >Comprar</a>
                </div>
                @else
                <div>{{$product->nombre}}</br>
                    ${{$product->precio}}<br>
                    {{$product->stock}} disponibles
                </div>
                <div><button class="bg-gray-700  text-white rounded disabled">
                        Comprar
                    </button>

                </div>
                @endif

            </li>
            @endforeach
        </div>

    </ul>
    {{$productos->links()}}
</div>



@endsection