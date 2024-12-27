{{-- @extends('layouts.app')

@section('title', 'Blog')
@section('meta-description', 'Blog')

@section('content')
    <h1>Blog</h1>
@endsection --}}

<x-layouts.app title="Blog" meta-description="'Blog meta Description'">

    <h1>Blog</h1>

    {{-- @dump($posts) --}}
    @foreach ($posts as $post)
        <h2> {{ $post['title'] }} </h2>
    @endforeach
</x-layouts.app>
