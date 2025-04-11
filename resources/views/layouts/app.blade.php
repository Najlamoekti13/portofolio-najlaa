<!DOCTYPE html>
<html lang="en" class="bg-gradient-to-b from-black via-indigo-900 to-blue-900 text-white min-h-screen">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Galaxy Portfolio')</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">

    <header class="bg-black bg-opacity-70 shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white">🌌 Najlaa'biba Portofolio</h1>
            <nav class="space-x-4">
                <a href="{{ url('/') }}" class="text-white hover:text-indigo-400">Home</a>
                <a href="{{ route('projects.index') }}" class="text-white hover:text-indigo-400">Project</a>
            </nav>
        </div>
    </header>

    <main class="flex-1 container mx-auto p-6">
        @yield('content')
    </main>

    <footer class="bg-black bg-opacity-70 text-center p-4 text-sm">
        &copy; {{ date('Y') }} Najlaa'biba Zaima Moekti — Galaxy Themed Portfolio ✨
    </footer>

</body>
</html>
