<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-slate-900 text-slate-100">
    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="max-w-2xl w-full text-center">
            <h1 class="text-4xl font-bold mb-4">Todo App</h1>
            <p class="mb-8 text-slate-400">Eenvoudige takenlijst gebouwd met Laravel</p>

            <div class="space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-6 py-2 bg-emerald-500 rounded hover:bg-emerald-600">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="px-6 py-2 bg-sky-600 rounded hover:bg-sky-700">
                        Log in
                    </a>
                    <a href="{{ route('register') }}" class="px-6 py-2 bg-indigo-600 rounded hover:bg-indigo-700">
                        Registreren
                    </a>
                @endauth
            </div>
        </div>
    </div>
</body>
</html>
