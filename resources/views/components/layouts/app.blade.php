<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}" />
    {{-- <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script> --}}
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

</head>

<body>
    {{-- @include('partials.nav') --}}

    {{-- @yield('content') --}}



    {{-- <x-navigation /> --}}

    <x-layouts.navigation />

    {{-- <pre>{{ $sum }}</pre> --}}


    @if(session('status'))
        <div style="color: green;">
            {{ session('status') }}
        </div>
    @endif


    {{ $slot }}


</body>

</html>
