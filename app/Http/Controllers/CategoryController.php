<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class CategoryController extends Controller
{
    public function getIndex()
    {
        $posts = Post::where('habilitated', true)->get();
        return view('category.index', compact('posts'));
    }

    public function getShow($id)
    {
        $post = Post::findOrFail($id); // Buscar un post por ID
        return view('category.show', ['post' => $post]);
    }

    public function getCreate()
    {
        return view('category.create');
    }

    public function getEdit($id)
    {
        $post = Post::findOrFail($id); // Buscar un post por ID
        return view('category.edit', ['post' => $post]);
    }
}
