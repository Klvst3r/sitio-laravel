{{-- @extends('layouts.app')

@section('title', 'Blog')
@section('meta-description', 'Blog')

@section('content')
    <h1>Blog</h1>
@endsection --}}

<x-layouts.app title="Blog" meta-description="'Blog meta Description'">

    <h1>Blog</h1>

    <a href="{{ route('posts.create') }}">Crear nuevo post</a>

    {{-- @dump($posts) --}}
    @foreach ($posts as $post)
        {{-- <h2> {{ $post['title'] }} </h2> --}}
        {{-- <h2> @dump($post) </h2> --}}
        {{-- <h2> {{ $post->title }} </h2> --}}
        {{-- <h2><a href="/blog/1">{{ $post->title }}</a></h2> --}}
        <h2><a href="{{ route('posts.show', $post) }}">
                {{ $post->title }}</a></h2>
    @endforeach
</x-layouts.app>
