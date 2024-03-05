<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Http\Requests\UpdateCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id','desc')->paginate();

        return view('cursos.index',compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){

        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;
        // $curso->save();

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso->id);
    }

    public function edit(Curso $curso){
       
        return view('cursos.edit',compact('curso'));
    }

    public function show(Curso $curso,$categoria=null){
        return view('cursos.show',compact('curso'),compact('categoria'));
    }

    public function update(UpdateCurso $request, Curso $curso){

        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;

        // $curso -> save();

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso->id);
    }
    
}
