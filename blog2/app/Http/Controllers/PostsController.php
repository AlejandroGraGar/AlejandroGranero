<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;


class PostsController extends Controller
{

  
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('usuario')->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $posts = Post::with('usuario')->get();
        $usu = Usuario::get();
        return view('posts.insert', compact('posts', 'usu'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::with('usuario')->create($request->all());
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post::find($id);
        if(Auth::id()!==$posts->usuario_id){
            return redirect()->route('posts.index');
        }else{
            $postid = Post::findOrFail($id);
            return view('posts.edit', compact('postid'));
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Post::findOrFail($id)->update($request->all());
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $posts = Post::find($id);
        if(Auth::id()!==$posts->usuario_id){
            return redirect()->route('posts.index');
        }else{
            Post::findOrFail($id)->delete();
            return redirect()->route('posts.index');
        }

    }
}
