<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body class="bg-gray-100">
    <div id="app">
        <nav class="bg-white shadow">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between py-4">
                    <a class="text-lg font-semibold" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <div class="space-x-4">
                        <a href="{{ url('/') }}" class="text-gray-600 hover:text-gray-800">Home</a>
                        <a href="{{ url('/about') }}" class="text-gray-600 hover:text-gray-800">About</a>
                        <a href="{{ url('/contact') }}" class="text-gray-600 hover:text-gray-800">Contact</a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-600 hover:text-gray-800">Logout</button>
                        </form>

                    </div>
                </div>
            </div>
        </nav>

        <main class="container mx-auto my-8">
            @yield('content')
        </main>
    </div>

    <footer class="bg-gray-200 py-4">
        <div class="container mx-auto text-center text-gray-600">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

