<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelas Sir Ameerul</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{-- Top Yellow Bar --}}
    <div style="height: 4px; background-color: #facc15;"></div>

    {{-- Navigation Bar --}}
    {{-- Navigation Bar --}}
    <nav class="navbar navbar-expand-lg bg-white border-bottom">
        <div class="container-fluid">
            {{-- Your Logo --}}
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/images.jpeg') }}" alt="Logo" style="height: 80px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                {{-- This pushes the nav links to the right --}}
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        {{-- We use Request::is() to check the current URL and add the 'active' class --}}
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Utama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('kelas') ? 'active' : '' }}"
                            href="{{ route('classes') }}">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('akaun') ? 'active' : '' }}"
                            href="{{ route('account') }}">Akaun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Page Content Goes Here --}}
    <main class="container mt-4">
        @yield('content')
    </main>

</body>

</html>