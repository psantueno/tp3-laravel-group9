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
        if (!Auth::check() || (!$post->habilitated && Auth::user()->id !== $post->user_id)) {
            abort(404, 'Post no encontrado o no habilitado.');
        }
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

    public function getDelete($id){
        $post = Post::findOrFail($id);
        if ($post->user_id !== Auth::id()) {
            abort(403, 'No tenés permiso para eliminar este post.');
        }

        return view('category.delete', ['post' => $post]);
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

    return redirect('/category/my')->with('success', 'Post creado correctamente.');
}

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        if ($post->user_id !== Auth::id()) {
            abort(403, 'No tenés permiso para actualizar este post.');
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:50',
            'habilitated' => 'required|boolean',
            'content' => 'required|string',
        ]);

        $post->update($validated);

        return redirect('/category/my')->with('success', 'Post actualizado correctamente.');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if ($post->user_id !== Auth::id()) {
            abort(403, 'No tenés permiso para eliminar este post.');
        }

        $post->delete();

        return redirect('/category/my')->with('success', 'Post eliminado correctamente.');
    }

    public function getMyCategories()
    {
        $posts = Post::where('user_id', Auth::id())->where('habilitated', true)->get();
        $postsUnhabilitated = Post::where('user_id', Auth::id())->where('habilitated', false)->get();
        return view('category.my', compact('posts', 'postsUnhabilitated'));
    }
}
