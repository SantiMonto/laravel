<?php

namespace App\Livewire\Courses;

use App\Models\Curso;
use Livewire\Component;

class Show extends Component
{
    public $categoria;
    public $curso;

    public function mount(Curso $curso, $categoria = null){
        $this->categoria=$categoria;
        $this->curso = $curso;
    }

    public function render()
    {
        return view('livewire.courses.show');
    }

    public function destroy(){
        
        $this->curso->delete();

        return redirect()->route('courses.index');
    }
}
