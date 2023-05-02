<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? ''}}</title>
  {{--  <title>Proyecto Laravel - @yield('title')</title>--}}
</head>
<body>
   {{-- @include('partials.navigation')    

    @yield('content') --}}
    <x-layouts.navigation/>

      @if(session('status')) <!-- @ if es una condicion de laravel -->
         <div class="status">
            {{session('status')}} <!-- session() es una funcion de laravel que muestra el contenido de una variable de sesion -->
          </div>
      @endif

    {{$slot}}
    {{$sum ?? ''}}
</body>
</html>