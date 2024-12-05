<form action="{{ route('cocktails.update', $cocktail->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $cocktail->name }}">
    
    <label for="category">Category</label>
    <input type="text" name="category" value="{{ $cocktail->category }}">

    <label for="instructions">Instructions</label>
    <textarea name="instructions">{{ $cocktail->instructions }}</textarea>

    <button type="submit">Guardar cambios</button>
</form>
<form action="{{ route('cocktails.destroy', $cocktail->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
</form>