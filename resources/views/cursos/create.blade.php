<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>En esta página podrás crear un curso</h1>
    <form action={{route('cursos.store')}} method="POST">

        @csrf

        <label>
            Nombre
            <br/>
            <input type="text" name="name" value="{{old('name')}}">
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
            <textarea name="description" rows="5">{{old('description')}}</textarea>
        </label>
        <br/>

        @error('description')
        <span style="color: red">{{$message}}</span>            
        @enderror

        <br/>
        <br/>
        <label>
            Categoría
            <br/>
            <input type="text" name="category" value="{{old('category')}}">
        </label>
        <br/>
        @error('category')
        <span style="color: red">{{$message}}</span>            
        @enderror
        <br/>
        <br/>
        <button type="submit">Enviar formulario</button>
    </form>
</body>
</html>