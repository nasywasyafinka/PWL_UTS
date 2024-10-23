<!-- resources/views/ralphlayouts/header.blade.php -->
<header>
    <nav>
        <div class="logo">
            <a href="/">
                <img src="{{ asset('images/logo/logo.png') }}" alt="Ralph Lauren Logo">
            </a>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li><a href="{{ url('/about') }}">About Me</a></li>
            <li><a href="#"><i class="fas fa-search"></i></a></li>
            {{-- <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li> --}}

            @if (Auth::check())
            <li><a href="{{ url('profile') }}"><i class="fas fa-user"></i></a></li>
            @else
            <li><a href="{{ url('login') }}" class="btn">Login</a></li>
            @endif
        </ul>
    </nav>
</header>

