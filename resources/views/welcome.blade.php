{{-- @component('components.layout') --}}


{{-- <x-layout title="Inicio" meta-description="Home meta Description">
    <x-slot name="title">
        Home Title
    </x-slot>

</x-layout> --}}

<x-layouts.app title="Home" :meta-description="'Home meta Description'" :sum="2 + 2">

  @vite('resources/css/app.css')
  {{-- @vite('resources/css/app.scss') --}}

    <h1>Inicio desde Welcome</h1>


    <h1 class="text-3xl font-bold text-center text-blue-500">
      ¡Laravel 10 con Tailwind CSS!
  </h1>

</x-layouts.app>

{{-- @endcomponent --}}
