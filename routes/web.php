<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    //funciones
    return view('welcome');
})->name('home');

Route::view('/contacto', 'contacto')->name('contact');
Route::view('/about', 'about')->name('about');
//Route::view('/blog', 'blog', ['posts' =>  $posts])->name('blog');}}  // se puede hacer asi o como abajo (mejor)
/*Route::get('/blog', function () { // se puede hacer asi, como arriba o con controladores (mejor)
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post!',
        'my-second-post' => 'Now I am getting the hang of this blogging thing.',
        'my-third-post' => 'Now I am getting the hang of this blogging thing.',
        'my-fourth-post' => 'Now I am getting the hang of this blogging thing.'
    ];

    return view('blog', ['posts' =>  $posts]);
})->name('blog'); */

// Route::get('/blog', 'App\Http\Controllers\PostController@index')->name('blog'); --> Imprimiendo directamente la ruta del controlador
Route::get('/blog', [PostController::class, 'index'])->name('posts.index'); //Por convención index se usa para mostrar una lista de elementos
Route::get('/blog/{id}', [PostController::class, 'show'])->name('posts.show'); //Por convención show se usa para mostrar un elemento en específico