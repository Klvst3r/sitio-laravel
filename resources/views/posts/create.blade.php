<x-layouts.app 
	title="Crear nuevo post" 
	meta-description="Formulario para crear un nuevo blog post"
>

    <h1>Create new Post</h1>

	{{-- @dump($post) --}}
	{{-- @dump($post->toArray()) --}}

	{{-- Visulizacion de errores --}}
	{{-- @if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif --}}

    	<form action="{{ route('posts.store') }}" method="POST">
    		@csrf
    		{{-- Etiquetas del formulario --}}
			@include('posts.form-fields')

    		<button type="submit">Enviar</button> 
    		<br/> 
    	</form>
    	<br/>
	
	<a href="{{ route('posts.index') }}">Regresar</a>


</x-layouts.app>
