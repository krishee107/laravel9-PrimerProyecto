<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    //
    public function index()
    {
        /*$posts = [
        'my-first-post' => 'Hello, this is my first blog post!',
        'my-second-post' => 'Now I am getting the hang of this blogging thing.',
        'my-third-post' => 'Now I am getting the hang of this blogging thing.',
        'my-fourth-post' => 'Now I am getting the hang of this blogging thing.'
        ];*/

        // $posts = DB::table('posts')->get(); --> Opcion 1 con DB
        // Con eloquent
        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    /*public function show($id)
    {
    // return Post::find($id); // --> Retornar un solo post con eloquent (no se necesita el get() porque es solo uno) y se muestra en formato json
    return Post::findOrFail($id); // --> Si no encuentra el post, muestra un error 404
    } */

    //Hacer la misma función pero especificando el tipo de dato que se va a recibir
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        //return $request // --> Para mostrar todos los datos del formulario (no es recomendable) en formato json
        //return $request->all(); // --> Para mostrar todos los datos del formulario
        //return $request->input('title'); // --> Para mostrar el titulo del post, lo llamamos por el name del input
        //CON ELOQUENT

        //Validar fornularios
        $request->validate([
            // --> Validar los datos del formulario
            'title' => 'required|min:3',
            // --> El titulo es requerido y debe tener un minimo de 3 caracteres
            'body' => 'required' // --> El cuerpo es requerido
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save(); // --> Guarda los datos en la base de datos

        session()->flash('status', 'Post was created'); // --> Muestra un mensaje de confirmación de que el post fue creado

        // return redirect()->route('posts.index'); // --> Redirecciona a la ruta posts.index
        return to_route('posts.index'); // --> Redirecciona a la ruta posts.index
    }

    public function edit(Post $post)
    {
        //$post = Post::findOrFail($post);
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        //Validar fornularios
        $request->validate([
            // --> Validar los datos del formulario
            'title' => 'required|min:3',
            // --> El titulo es requerido y debe tener un minimo de 3 caracteres
            'body' => 'required' // --> El cuerpo es requerido
        ]);

        // $post = Post::findOrFail($post);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save(); // --> Guarda los datos en la base de datos

        session()->flash('status', 'Post was updated'); // --> Muestra un mensaje de confirmación de que el post fue creado

        // return redirect()->route('posts.index'); // --> Redirecciona a la ruta posts.index
        return to_route('posts.index'); // --> Redirecciona a la ruta posts.index
    }
}