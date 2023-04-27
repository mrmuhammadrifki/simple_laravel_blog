<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ url('posts') }}" class="nav-link px-2 text-secondary">Muhammad Rifki</a></li>
            </ul>

            <div class="text-end">
                @if (Auth::check())
                    <a href="{{ 'logout' }}" class="btn btn-outline-light me-2">Logout</a>
                @else
                    <a href="{{ 'register' }}" class="btn btn-outline-light me-2">Register</a>
                    <a href="{{ 'login' }}" class="btn btn-outline-light me-2">Login</a>
                @endif
            </div>
        </div>
    </div>
</header>
