{{-- @component('components.layout') --}}


{{-- <x-layout title="Inicio" meta-description="Home meta Description">
    <x-slot name="title">
        Home Title
    </x-slot>

</x-layout> --}}

<x-layouts.app title="Home" :meta-description="'Home meta Description'" :sum="2 + 2">

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
  

    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Home</h1>

    {{-- Datos a los que se puede acceder --}}
    @auth
    <div class="text-white">
        Authenticated User: {{ Auth::user()->name }}
    </div>
    <div class="text-white">
        Authenticated User: {{ Auth::user()->email }}
    </div>
@endauth



</x-layouts.app>

{{-- @endcomponent --}}
