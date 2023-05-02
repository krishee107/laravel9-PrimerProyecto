<x-layouts.app title="Blog" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crear un post</h1>
                
                <form method="POST" action="{{ route('posts.store')}}">
                    @csrf
                    <label>
                        Title<br>
                        <input type="text" name="title" id="title">
                    </label><br>
                    <label>
                        Body<br>
                        <textarea name="body" id="body" cols="30" rows="10"></textarea>
                    </label><br>

                    <button type="submit">Enviar</button>
                </form>

                <a href="{{route('posts.index') }}">Go Back</a>
            </div>
        </div>
    </div>
</x-layouts.app>