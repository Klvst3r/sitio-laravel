{{-- @component('components.layout') --}}


{{-- <x-layout title="Inicio" meta-description="Home meta Description">
    <x-slot name="title">
        Home Title
    </x-slot>

</x-layout> --}}

<x-layouts.app title="Home" :meta-description="'Home meta Description'" :sum="2 + 2">

  @vite('resources/css/app.css')
  {{-- @vite('resources/css/app.scss') --}}

    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Home</h1>




</x-layouts.app>

{{-- @endcomponent --}}
