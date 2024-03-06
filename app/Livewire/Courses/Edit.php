<?php

namespace App\Livewire\Courses;

use App\Models\Curso;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Edit extends Component
{
    public $curso;

    #[Validate('required')] 
    public $name = '';
 
    #[Validate('required')] 
    public $description = '';

    #[Validate('required')] 
    public $category = '';


    public function mount(Curso $curso){
        $this->curso=$curso;
        $this->name = $curso->name;
        $this->description = $curso->description;
        $this->category = $curso->category;

    }

    public function store()
    {
        $this->validate(); 

        $this->curso-> update($this->only(['name', 'description', 'category']));

        return redirect()->route('courses.show', $this->curso->id)->with('status','Curso creado');
    }

    public function render()
    {
        // dd($this->curso->name);
        return view('livewire.courses.edit');
    }
}
