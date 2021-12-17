<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agressive Debate Website</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-400">
    <nav class="p-10 bg-white flex justify-between mb-6 text-white bg-gray-800">
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-3 font-bold">About</a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class="p-3 font-bold">More</a>
            </li>
            <li>
                <a href="{{ route('posts') }}" class="p-3 font-bold">Posts</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth 
                <li>
                    <a href="/" class="p-3 font-bold">{{ auth()->user()->name }}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                        @csrf
                        <button type="submit" class="font-bold">Logout</button>
                    </form>
                </li>
            @endauth

            @guest
                <li>
                    <a href="{{ route('login') }}" class="p-3 font-bold">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="p-3 font-bold">Register</a>
                </li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>