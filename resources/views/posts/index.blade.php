{{-- @extends('layouts.app')

@section('title', 'Blog')
@section('meta-description', 'Blog')

@section('content')
    <h1>Blog</h1>
@endsection --}}

<x-layouts.app title="Blog" meta-description="'Blog meta Description'">

    <h1>Blog</h1>

    {{-- @if(session)
    <div class="status">
        {{ session('status') }}
    </div>
    @endif --}}

    
    <a href="{{ route('posts.create') }}">Crear nuevo post</a>
        {{-- @dump($posts) --}}

    @foreach ($posts as $post)
        <div style="display: flex; align-items: baseline">
            <h2>
                {{-- <h2> {{ $post['title'] }} </h2> --}}
                {{-- <h2> @dump($post) </h2> --}}
                {{-- <h2> {{ $post->title }} </h2> --}}
                {{-- <h2><a href="/blog/1">{{ $post->title }}</a></h2> --}}
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>
            </h2>&nbsp;
            <a href="{{ route('posts.edit', $post) }}">Edit</a>
        </div>
    @endforeach
</x-layouts.app>
