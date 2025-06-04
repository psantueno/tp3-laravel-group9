<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;


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
    $post = Post::findOrFail($id);

    if ($post->user_id !== Auth::id()) {
        abort(403, 'No tenés permiso para editar este post.');
    }

    return view('category.edit', ['post' => $post]);
}

   public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'type' => 'required|string|max:50',
        'habilitated' => 'required|boolean',
        'content' => 'required|string',
    ]);

    $validated['user_id'] = Auth::id(); // Asigna el usuario autenticado

    Post::create($validated);

    return redirect('/category')->with('success', 'Post creado correctamente.');
}

}
