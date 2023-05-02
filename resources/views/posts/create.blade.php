<x-layouts.app title="Blog" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crear un post</h1>
                
               <!-- @ dump($errors->all()); dump($errors->all()) es una funcion de laravel que muestra los errores -->
                <form method="POST" action="{{ route('posts.store')}}">
                    @csrf
                    <label>
                        Title<br>
                        <input type="text" name="title" id="title" value="{{old('title')}}">
                    </label><br>
                    @error('title')
                        <small style="color: red">{{$message}}</small><br>
                    @enderror
                    <label>
                        Body<br>
                        <textarea name="body" id="body" cols="30" rows="10" value="{{old('body')}}"></textarea>
                    </label><br>
                    @error('body')
                        <small style="color: red">{{$message}}</small><br>
                    @enderror

                    <button type="submit">Enviar</button>
                </form>

                <a href="{{route('posts.index') }}">Go Back</a>
            </div>
        </div>
    </div>
</x-layouts.app>