<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <p>Esta es la pgina de los productos</p>
    <ul>
        @foreach($productos as $product)
            <li>{{$product->nombre}}</li>
        @endforeach
    </ul>
    {{$productos->links()}}
</body>
</html>