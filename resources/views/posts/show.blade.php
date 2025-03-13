<x-layouts.app 
	:title="$post->title" 
	:meta-description="$post->body"
>

    <h1>Blog</h1>

	<h1>{{ $post->title }}</h1>

	<p>{{ $post->body }}</p>

	<a href="/blog">Regresar</a>


</x-layouts.app>
