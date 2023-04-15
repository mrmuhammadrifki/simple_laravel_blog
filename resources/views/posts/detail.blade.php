<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | {{ $post->title }}</title>
     {{-- CSS Bootstrp  --}}
     <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     {{-- My CSS --}}
     <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
</head>
<body>
    <div class="container mt-5">
        <article class="blog-post">
            <h2 class="blog-post-title mb-1">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ date("d M Y H:i", strtotime($post->created_at)) }}</p>
            <p>{{ $post->content }}</p>
        </article>
        <a href="{{ url('posts') }}" class="btn btn-secondary">< Kembali Ke Posts</a>
    </div>

     {{-- JS Bootstrap --}}
     <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>