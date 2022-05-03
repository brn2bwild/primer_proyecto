<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('alumnos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request->all());
      $request->validate([
        'nombre' => 'required',
        'apellido_paterno' => 'required',
        'apellido_materno' => 'required',
        'matricula' => 'required',
      ],[
        'nombre.required' => 'Debes introducir un nombre',
        'apellido_paterno.required' => 'Debes introducir un nombre',
        'apellido_materno.required' => 'Debes introducir un nombre',
        'matricula.required' => 'Debes introducir un nombre',
      ]);
        Alumno::create($request->all());
        return redirect()->route('alumnos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        if($alumno->rol == 'admin'){
          return view('alumnos.editar', compact('alumno'));
        } else if($alumno->rol == 'alumno'){
          return view('alumnos.mensaje');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
      $request->validate([
        'nombre' => 'required',
        'apellido_paterno' => 'required',
        'apellido_materno' => 'required',
        'matricula' => 'required',
      ],[
        'nombre.required' => 'Debes introducir un nombre',
        'apellido_paterno.required' => 'Debes introducir un nombre',
        'apellido_materno.required' => 'Debes introducir un nombre',
        'matricula.required' => 'Debes introducir un nombre',
      ]);
      $alumno->update($request->all());
      return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}
