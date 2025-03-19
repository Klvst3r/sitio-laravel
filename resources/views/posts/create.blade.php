<x-layouts.app 
	title="Crear nuevo post" 
	meta-description="Formulario para crear un nuevo blog post"
>

    <h1>Create new Post</h1>


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
    		<label>
    			Title<br/>
    			<input type="text" name="title" value="{{ old('title') }}">
				
				@error('title')
					<br/>
					<small style="color: red">{{ $message }}</small>
				@enderror
    		</label><br/>
    		<label>
    			Body<br/>
    			<textarea name="body">{{ old('body') }}</textarea>

				@error('body')
					<br/>
					<small style="color: red">{{ $message }}</small>
				@enderror


    		</label><br/>
    		<button type="submit">Enviar</button> 
    		<br/> 
    	</form>
    	<br/>
	
	<a href="{{ route('posts.index') }}">Regresar</a>


</x-layouts.app>
