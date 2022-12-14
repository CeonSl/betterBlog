@role('Administrator')
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth ">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            .image {
                background-image: url("{{ asset('img/patron-de-lineas-negro_7680x4320_xtrafondos.com.jpg') }}");
                background-repeat: no-repeat;
                background-position: center center;
                height: 1800px;
                background-attachment: fixed;
                background-size: cover;
            }
        </style>
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="{{ asset('img/moda.png') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
        <script type="text/javascript"
            src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.js"></script>
        <script src="https://kit.fontawesome.com/27763c0bc0.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.css" />
        <!-- Styles -->
        @livewireStyles


    </head>

    <body class="font-sans antialiased fondo">

        <x-jet-banner />

        @php
            $links = [
                [
                    'title' => 'Par??metros',
                    'url' => route('nivel_parametros.index'),
                    'active' => request()->routeIs('nivel_parametros.*'),
                    'icon' => 'fa-regular fa-folder-open',
                ],
                [
                    'title' => 'Cliente',
                    'url' => route('clientes.index'),
                    'active' => request()->routeIs('clientes.*'),
                    'icon' => 'fa-solid fa-user',
                ],
                [
                    'title' => 'Ropa',
                    'url' => route('ropas.index'),
                    'active' => request()->routeIs('ropas.*'),
                    'icon' => 'fa-solid fa-shirt',
                ],
            ];
        @endphp

        <div class="flex " x-data="{ open: false, openSidebar: true }" x-transition:enter.scale.80 x-transition:leave.scale.90>
            <div :class="{ 'lg:block': openSidebar, }" class="w-64 flex-shrink-0 hidden lg:block">

                @include('layouts.partials.admin.sidebar')

            </div>

            <div class="flex-1 ">
                @include('layouts.partials.admin.navegation')
                <div class="container py-8 ">
                    {{ $slot }}
                </div>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>

    </html>
@endrole
