@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="row justify-content-center">
        <div class="card col-md-5">
            <div class="card-body">
                <h1 class="card-title text-center mb-5 mt-3">Registrasi</h1>

                @if (session()->has('error_message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('error_message') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form method="POST" action="{{ url('register') }}" class="form-control">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @if ($errors->has('name'))
                            <span class="text-danger"> {{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        @if ($errors->has('email'))
                            <span class="text-danger"> {{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @if ($errors->has('password'))
                            <span class="text-danger"> {{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="password" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Daftar</button>
                </form>

                <small class="card-text text-center d-block mt-3">Sudah Punya Akun? <a
                        href="{{ url('login') }}">Login</a></small>
            </div>
        </div>
    </div>
@endsection
