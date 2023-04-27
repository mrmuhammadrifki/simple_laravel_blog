@extends('layouts.app')

@section('title', 'Selamat Datang!')

@section('content')
    <h1 class="mb-5 text-center border border-dark-subtle rounded-pill w-50 mx-auto p-3">Blog Muhammad Rifki</h1>
    <a href="{{ url('posts/create') }}" class="btn btn-success mb-4">+ Tambah Postingan Baru</a>
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->content }}</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated at
                                {{ date('d M Y H:i', strtotime($post->created_at)) }}</small></p>
                        <a href="{{ url("posts/$post->id") }}" class="btn btn-primary me-2">Selengkapnya</a>
                        <a href="{{ url("posts/$post->id/edit") }}" class="btn btn-warning">Edit</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
