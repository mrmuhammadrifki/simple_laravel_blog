<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        $posts = Post::active()->get();
        
        $view_data = [
            'posts' => $posts
        ];
        return view('posts.index', $view_data);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        return view('posts.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        $title      = $request->input('title');
        $content    = $request->input('content');
        $date       = date('Y-m-d H:i:s');

        Post::create([
            'content' => $content,
            'title' => $title,  
        ]);

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        $post = Post::where('id', $id)->first();
        
        $view_data = [
            'post' => $post
        ];
        return view('posts.detail', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        $post = Post::where('id', $id)->first();

        $view_data = [
            'post' => $post
        ];

        return view('posts.edit', $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        $title      = $request->input('title');
        $content    = $request->input('content');

            Post::where('id', $id)
            ->update([
                'title' => $title,
                'content' => $content,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        return redirect("posts/{$id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        Post::where('id', $id)
            ->delete();

        return redirect('posts');
    }
}