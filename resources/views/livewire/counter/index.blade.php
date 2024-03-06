<div>
    <x-slot:title>Counter</x-slot:title>

    <h1>{{ $count }}</h1>

    <button wire:click="decrement">-</button>
 
    <button wire:click="increment">+</button>

    <br/>
    <br/>
 
    <a href={{route('courses.index')}}>Volver a cursos</a>
</div>