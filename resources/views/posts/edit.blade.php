@extends('layouts.app')
@section('title', 'Blog | Ubah Postingan')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="mb-4 display-5">Ubah Postingan</h1>
            <form method="POST" action="{{ url("posts/$post->id") }}" class="form-control p-3">
                @method('PATCH')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea class="form-control" id="content" name="content" rows="6">{{ $post->content }}</textarea>
                </div>
                <a href="{{ url('posts') }}" class="btn btn-secondary me-2 mt-3">
                    < Kembali Ke Posts</a>
                        <button type="submit" class="btn btn-primary mt-3">Ubah</button>
            </form>

            <form method="POST" action="{{ url("posts/$post->id") }}">
                @method('DELETE')
                @csrf

                <button type="submit" class="btn btn-danger mt-3"
                    onclick="return confirm('Yakin ingin menghapus postingan ini?')">Hapus</button>
            </form>
        </div>
    </div>
@endsection
