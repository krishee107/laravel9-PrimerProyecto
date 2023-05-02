<x-layouts.app title="Blog" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Formulario de edición</h1>

                <form method="POST" action="{{ route('posts.update', $post)}}">
                    @csrf @method('PATCH')
                    <label>
                        Title<br>
                        <input type="text" name="title" id="title" value="{{old('title', $post->title)}}">
                    </label><br>
                    @error('title')
                        <small style="color: red">{{$message}}</small><br>
                    @enderror
                    <label>
                        Body<br>
                        <textarea name="body" id="body" cols="30" rows="10" value="{{old('body', $post->body)}}"></textarea>
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