<x-layouts.app title="Blog" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Blog</h1>
                <h2>{{$post->title}}</h2>
                <p>{{$post->body}}</p>
                <a href="{{route('posts.index') }}">Go Back</a>
            </div>
        </div>
    </div>
</x-layouts.app>