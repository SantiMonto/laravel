<?php

namespace App\Livewire\Courses;

use App\Models\Curso;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required')] 
    public $name = '';
 
    #[Validate('required')] 
    public $description = '';

    #[Validate('required')] 
    public $category = '';

    public function store()
    {
        $this->validate(); 

        $curso = Curso::create($this->only(['name', 'description', 'category']));

        return redirect()->route('courses.show', $curso->id)->with('status','Curso creado');
    }

    public function render()
    {
        return view('livewire.courses.create');
    }
}