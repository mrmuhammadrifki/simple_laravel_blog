@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="row justify-content-center">
        <div class="card col-md-4">
            <div class="card-body">
                <h1 class="card-title text-center mb-5 mt-3">Login</h1>

                @if (session()->has('error_message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('error_message') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form method="POST" action="{{ url('login') }}" class="form-control">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Login</button>
                </form>

                <small class="card-text text-center d-block mt-3">Belum Punya Akun? <a
                        href="{{ url('register') }}">Daftar</a></small>
            </div>
        </div>
    </div>
@endsection
