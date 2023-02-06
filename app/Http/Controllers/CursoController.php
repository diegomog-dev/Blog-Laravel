<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id','desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }
    public function create(){
        return view('cursos.create');
    }
    public function store(StoreCurso $request){

        /* $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save(); */

        //Este metodo realiza lo mismo que asignandolo de forma manual
        /* $curso = Curso::create([
            'name' => $request->name,
            'description'=> $request->description,
            'categoria'=> $request->categoria
        ]); */

        // Con este método se realiza de forma que obtenga toda la información del request y Eloquent automaticamente
        // asigna de acuerdo a los campos que hay en el formulario con los que se encuentran en la tabla en la BD
        $curso = Curso::create($request->all());
        return to_route('cursos.show',$curso);
    }

    public function show(Curso $curso){
        //$curso = Curso::find($id); Al instanciar el parametro que se recibe con el modelo, no se necesita está línea
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        $request -> validate([
            'name'=>'required',
            'description'=>'required',
            'categoria'=>'required'
        ]);

        /* $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        $curso->save(); */
        $curso -> update($request -> all());
        return to_route('cursos.show',$curso);
    }

    public function destroy(Curso $curso){
        $curso -> delete();
        return to_route('cursos.index');
    }
}
