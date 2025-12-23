<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Site</title>
    @vite('resources/css/app.css')
</head>
<body>
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-blog">
            {{ session('success') }}
        </div>
    @endif
    <header>
        <nav>
            <a href="/">Main Page</a> |
            @guest
               <a href="/login">Login</a> |
            @endguest
            @auth
                <a href="/profile"> {{ auth()->user()->login }} </a> |
                <a href="/create">Create New Post</a> |
            @endauth
                <a href="/about">About Us</a>
            </nav>
    </header>
    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>