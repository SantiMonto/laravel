<div>
    <h1>
        <?php
        if ($categoria) {
            echo "Bienvenido al curso: $curso->name, de la categoría: $categoria";
        } else {
            echo "Bienvenido al curso: $curso->name";
        }
        ?>
    </h1>
    <a href={{ route('courses.index') }}>Volver a cursos</a>
    <br />
    <br />
    <a href={{ route('courses.edit', $curso->id) }}>Editar curso</a>
    <p><strong>Categoria: </strong>{{ $curso->category }}</p>
    <p><strong>Descripción: </strong>{{ $curso->description }}</p>
    <form wire:submit="destroy">
        <button type="submit">Eliminar curso</button>
    </form>
</div>
