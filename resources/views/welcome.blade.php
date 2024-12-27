{{-- @component('components.layout') --}}


{{-- <x-layout title="Inicio" meta-description="Home meta Description">
    <x-slot name="title">
        Home Title
    </x-slot>

</x-layout> --}}

<x-layouts.app title="Home" :meta-description="'Home meta Description'" :sum="2 + 2">

    <h1>Inicio</h1>


</x-layouts.app>

{{-- @endcomponent --}}
