<div>
    <form wire:submit="store">
        @csrf
        <label>
            Nombre del curso
            <br/>
            <input type="text" wire:model="name" value="{{$name}}" >
        </label>
        <div>
            @error('name') <span style="color: red">{{ $message }}</span> @enderror 
        </div>

        <label>
            Descripción
            <br/>
            <textarea name="description" rows="5" wire:model="description"></textarea>
        </label>
        <div>
            @error('description')<span style="color: red">{{ $message }}</span> @enderror
        </div>
       
        <label>
            Categoría
            <br/>
            <input type="text" wire:model="category" value="{{$category}}">
        </label>
        <div>
            @error('category') <span style="color: red">{{ $message }}</span> @enderror 
        </div>
        <br/>
        
        <button type="submit">Enviar formulario</button>
    </form>
</div>
