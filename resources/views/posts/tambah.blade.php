<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Tambah Potingan</title>
     {{-- CSS Bootstrp  --}}
     <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
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
                      <a href="{{ url('posts') }}" class="btn btn-secondary me-2 mt-3">< Kembali Ke Posts</a>
                      <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>

     {{-- JS Bootstrap --}}
     <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>