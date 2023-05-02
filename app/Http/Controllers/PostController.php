<?php

namespace App\Http\Controllers;

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
        $posts = DB::table('posts')->get();

        return view('blog', ['posts' => $posts]);
    }
}