<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.partials.head')
    </head>
    <body class="font-sans antialiased">
        @include('layouts.partials.common')
        <div class="bg-gradient-to-br from-indigo-100 via-white to-blue-100 min-h-screen">
            @include('layouts.partials.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class=bg-gradient-to-br from-indigo-100 via-white to-blue-100 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="pb-40">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
