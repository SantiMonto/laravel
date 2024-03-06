<?php

namespace App\Livewire\Courses;
use App\Models\Curso;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('livewire.courses.index',compact('cursos'));
    }
}
