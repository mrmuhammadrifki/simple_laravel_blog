<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    {{-- CSS Bootstrp  --}}
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .blog {
            padding: 0.5rem;
            border-bottom: 1px solid lightgray
        }
        small {
            color: gray
        }
    </style>
</head>
<body>
    {{-- Awal Navbar --}}
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('posts') }}">Muhammad Rifki</a>
        </div>
      </nav>
    {{-- Akhir Navbar --}}
    <div class="container mt-5">
        <h1 class="mb-5 text-center border border-dark-subtle rounded-pill w-50 mx-auto p-3">Blog Muhammad Rifki</h1>
        <a href="{{ url('posts/create') }}" class="btn btn-success mb-4">Tambah Postingan Baru</a>
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated at {{ date('d M Y H:i', strtotime($post->created_at)) }}</small></p>
                    <a href="{{ url("posts/$post->id") }}" class="btn btn-primary me-2">Selengkapnya</a>
                    <a href="{{ url("posts/$post->id/edit") }}" class="btn btn-warning">Edit</a>
                </div>
            </div>
        @endforeach
    </div>

    {{-- JS Bootstrap --}}
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>


