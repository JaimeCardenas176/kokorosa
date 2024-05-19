<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="fixed top-0 grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3 w-full max-w-7xl left-0 right-0 mx-auto">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <img class="rounded-full h-12 w-auto text-white lg:h-16" src="{{ url('assets/logo.png') }}"
                            height="128" width="128">

                    </div>

                </header>

                <main class="">
                    <div class="items-center lg:grid-cols-2 lg:gap-8">
                        @if (Route::has('login'))
                            <nav class="mx-3 justify-center">
                                <div class="flex flex-col items-center">
                                    <a href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Acceder
                                    </a>
                
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                            Registrarse
                                        </a>
                                    @endif
                                </div>
                            </nav>
                        @endif
                    </div>
                </main>

                <footer class="fixed bottom-0 py-16 text-center text-sm text-black dark:text-white/70 w-full max-w-7xl left-0 right-0 mx-auto">
                    <p>© KokoRosa 2024</p> powered by Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP
                    v{{ PHP_VERSION }})
                </footer>
            </div>
        </div>
    </div>
</body>

</html>
