<x-layouts.app 
	title="Crear nuevo post" 
	meta-description="Formulario para crear un nuevo blog post"
>

    <h1>Create new Post</h1>

    	<form action="{{ route('posts.store') }}" method="POST">
    		@csrf
    		<label>
    			Title<br/>
    			<input type="text" name="title">
    		</label><br/>
    		<label>
    			Body<br/>
    			<textarea></textarea>
    		</label><br/>
    		<button type="submit">Enviar</button> 
    		<br/> 
    	</form>
    	<br/>
	
	<a href="{{ route('posts.index') }}">Regresar</a>


</x-layouts.app>
