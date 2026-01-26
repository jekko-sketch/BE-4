<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Todo App' }}</title>
    @php
        $manifestPath = public_path('build/manifest.json');
    @endphp

    @if (app()->environment('local'))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @elseif (file_exists($manifestPath))
        @php $manifest = json_decode(file_get_contents($manifestPath), true); @endphp
        @if (isset($manifest['resources/js/app.js']['css'][0]))
            <link rel="stylesheet" href="{{ asset('build/'.$manifest['resources/js/app.js']['css'][0]) }}">
        @elseif (isset($manifest['resources/css/app.css']['file']))
            <link rel="stylesheet" href="{{ asset('build/'.$manifest['resources/css/app.css']['file']) }}">
        @endif
        <script type="module" src="{{ asset('build/'.$manifest['resources/js/app.js']['file']) }}"></script>
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <style>
        /* quick fallback styling for when Tailwind hasn't loaded yet */
        .sidebar{min-width:220px}
    </style>
</head>
<body class="min-h-screen bg-surface-800 text-slate-200 font-sans">
    <div class="flex">
        <aside class="sidebar sticky top-0 h-screen bg-gradient-to-b from-surface-900 to-surface-800 p-6 text-slate-300">
            <div class="mb-8 flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-accent-2"></div>
                <div>
                    <div class="text-xl font-semibold">TODO APP</div>
                    <div class="text-xs text-muted">Student dashboard</div>
                </div>
            </div>

            <nav class="space-y-2">
                <a href="#" class="block px-3 py-2 rounded-md bg-surface-700">Vandaag</a>
                <a href="#" class="block px-3 py-2 rounded-md hover:bg-surface-700">Deze week</a>
                <a href="#" class="block px-3 py-2 rounded-md hover:bg-surface-700">Alles</a>
            </nav>

            <div class="mt-auto text-sm text-slate-400 pt-6">Voorbeeld UI voor je Canvas-presentatie.</div>
        </aside>

        <main class="flex-1 p-8">
            <header class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-semibold">{{ $title ?? 'Dashboard' }}</h2>
                <div class="flex items-center gap-4">
                    <button id="new-task-btn" class="px-3 py-2 bg-accent rounded-md text-surface-900">Nieuwe taak</button>
                    <div class="w-9 h-9 rounded-full bg-surface-700"></div>
                </div>
            </header>

            <div class="space-y-6">@yield('content')</div>
        </main>
    </div>
</body>
</html>
