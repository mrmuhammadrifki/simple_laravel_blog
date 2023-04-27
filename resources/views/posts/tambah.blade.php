@extends('layouts.app')
@section('title', 'Blog | Tambah Postingan')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="mb-4 display-5">Tambah Postingan Baru</h1>
            <form method="POST" action="{{ url('posts') }}" class="form-control p-3">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea class="form-control" id="content" name="content" rows="6"></textarea>
                </div>
                <a href="{{ url('posts') }}" class="btn btn-secondary me-2 mt-3">
                    < Kembali Ke Posts</a>
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
        </div>
    </div>
@endsection
