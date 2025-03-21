<x-layouts.app 
	:title="$post->title" 
	:meta-description="$post->body"
>

    <h1>Editar Blog</h1>

    {{-- @dump($post->toArray()) --}}

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf @method('PATCH')
        {{-- Se incluyen los campos del formulario--}}

        @include('posts.form-fields')
        
        <br/>
        <button type="submit">Enviar</button> 
        <br/> 
    </form>
    <br/>

	
	<a href="{{ route('posts.index') }}">Regresar</a>


</x-layouts.app>
