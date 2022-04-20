<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-200">
    <nav class="bg-white shadow-lg mb-6">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="/" class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold ">Home</a>
                        <a href="{{ route('dashboard') }}"
                            class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Dashboard</a>
                        <a href="{{ route('posts') }}"
                            class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Posts</a>
                    </div>
                </div>
                <!-- Secondary Navbar items -->
                <div class="hidden md:flex items-center space-x-3 ">
                    @auth
                        <a href=""
                            class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">
                            {{ auth()->user()->name }}
                        </a>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit"
                                class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Logout</button>
                        </form>

                    @endauth

                    @guest
                        <a href="{{ route('login') }}"
                            class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Log
                            In</a>
                        <a href="{{ route('register') }}"
                            class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Sign
                            Up</a>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>
