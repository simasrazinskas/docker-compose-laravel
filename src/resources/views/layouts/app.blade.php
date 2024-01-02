<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Bentis')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    <link href="{{ asset('css/tabler.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('css/tabler-flags.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('css/tabler-payments.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('css/tabler-vendors.min.css?1684106062') }}" rel="stylesheet" />
    <link href="{{ asset('css/demo.min.css?1684106062') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class="layout-fluid">
    <div class="page">
        <!-- Left Sidebar -->
        @include('layouts.sidebar')
        <div class="page-wrapper">
            <!-- Content -->
            @yield('content')
            <!-- Footer -->
            @include('layouts.footer')
        </div>
    </div>
    <!-- Scripts -->
    @include('layouts.scripts')
</body>

</html>