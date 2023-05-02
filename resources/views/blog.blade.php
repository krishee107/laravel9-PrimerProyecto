{{--    @extends('layouts.app')


    @section('title', 'Blog')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    @endsection--}}

    <x-layouts.app title="Blog" :sum="2+2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Blog</h1>
                    @dump($posts) <!-- dump() es una funcion de laravel que muestra el contenido de una variable -->
                    @foreach($posts as $post) <!-- @ foreach es un bucle de laravel -->
                        <li>{{$post}}</li>
                    @endforeach
                </div>
            </div>
        </div>
</x-layouts.app>

