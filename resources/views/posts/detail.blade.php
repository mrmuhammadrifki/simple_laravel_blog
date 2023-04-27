@extends('layouts.app')
@section('title', "Judul : $post->title")

@section('content')
    <article class="blog-post">
        <h2 class="blog-post-title mb-1">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ date('d M Y H:i', strtotime($post->created_at)) }}</p>
        <p>{{ $post->content }}</p>
    </article>
    <a href="{{ url('posts') }}" class="btn btn-secondary">
        < Kembali Ke Posts</a>
        @endsection
