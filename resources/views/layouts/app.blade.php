<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'App') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        <main id="screen-loader"
            class="flex h-auto min-h-screen items-center justify-center rounded-lg bg-white dark:bg-gray-700 md:ml-64">
            <span
                class="box-border inline-block h-12 w-12 animate-spin rounded-full border-4 border-gray-200 border-b-blue-500"></span>
        </main>
        <!-- Page Content -->
        <main id="content" style="display: none">
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
    <script>
        // Show loader while the page is loading
        window.addEventListener('load', function() {
            document.getElementById('screen-loader').style.display = 'none';
            document.getElementById('content').style.display = 'block';
        });

        // Optional: Add a fallback in case 'load' event takes too long
        setTimeout(function() {
            document.getElementById('screen-loader').style.display = 'none';
            document.getElementById('content').style.display = 'block';
        }, 5000); // Adjust the timeout as needed (e.g., 5000ms = 5 seconds)
    </script>
</body>

</html>
