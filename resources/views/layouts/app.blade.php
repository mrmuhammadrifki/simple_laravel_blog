<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- CSS Bootstrp  --}}
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
    @include('layouts.app.header')
    {{-- Akhir Navbar --}}
    {{-- Awal Konten --}}
    <div class="container mt-5">

        @yield('content')

        {{-- Awal Footer --}}
        @include('layouts.app.footer')
        {{-- Akhir Footer --}}
    </div>
    {{-- Akhir Konten --}}

    {{-- JS Bootstrap --}}
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
