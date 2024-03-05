<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar curso</title>
</head>
<body>
    <h1>En esta página podrás editar un curso</h1>
    <form action={{route('cursos.update', $curso)}} method="POST">

        @csrf

        @method('put')

        <label>
            Nombre
            <br/>
            <input type="text" name="name" value="{{old('name',$curso->name)}}">
        </label>
        <br/>
        @error('name')
            <span style="color: red">{{$message}}</span>            
        @enderror
        <br/>
        <br/>
        <label>
            Descripción
            <br/>
            <textarea name="description" rows="5">{{old('description',$curso->description)}}</textarea>
        </label>
        @error('description')
        <span style="color: red">{{$message}}</span>            
        @enderror
        <br/>
        <br/>
        <label>
            Categoría
            <br/>
            <input type="text" name="category" value="{{old('category',$curso->category)}}">
        </label>
        @error('category')
        <span style="color: red">{{$message}}</span>            
        @enderror
        <br/>
        <br/>
        <button type="submit">Actualizar formulario</button>
    </form>
</body>
</html>