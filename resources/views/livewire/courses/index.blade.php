<div>
    <h1>Bienvenido a la página cursos</h1>
    <a href={{route('courses.create')}}>Crear curso</a>
    <br/>
    <br/>
    <a href={{route('counter')}}>Ir al contador</a>
    <ul>
        @foreach($cursos as $curso)
        <li>
            <a href={{route('courses.show',$curso->id)}}>{{$curso->name}}</a>
        </li>
        @endforeach
    </ul>
    {{$cursos->links()}}
</div>
