<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php
        if ($categoria) {
            echo "Bienvenido al curso: $curso->name, de la categoría: $categoria";
        } else {
            echo "Bienvenido al curso: $curso->name";
        }
        ?>
    </h1>
    <a href={{ route('cursos.index') }}>Volver a cursos</a>
    <br />
    <br />
    <a href={{ route('cursos.edit', $curso->id) }}>Editar curso</a>
    <p><strong>Categoria: </strong>{{ $curso->category }}</p>
    <p><strong>Descripción: </strong>{{ $curso->description }}</p>
    <form action="{{ route('cursos.destroy', $curso) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar curso</button>
    </form>
</body>

</html>
