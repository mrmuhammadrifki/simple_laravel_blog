<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = DB::table('posts')
                    ->select('id', 'title', 'content', 'created_at')
                    ->where('active', true)
                    ->get();
    
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
        return view('posts.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title      = $request->input('title');
        $content    = $request->input('content');
        $date       = date('Y-m-d H:i:s');

        DB::table('posts')->insert([
            'content' => $content,
            'title' => $title,
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = DB::table('posts')
            ->select('id', 'title', 'content', 'created_at')
            ->where('id', '=', $id)
            ->first();

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
        $post = DB::table('posts')
            ->select('id', 'title', 'content', 'created_at')
            ->where('id', '=', $id)
            ->first();

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
        $title      = $request->input('title');
        $content    = $request->input('content');

        DB::table('posts')
            ->where('id', $id)
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
        DB::table('posts')
            ->where('id', $id)
            ->delete();

        return redirect('posts');
    }
}