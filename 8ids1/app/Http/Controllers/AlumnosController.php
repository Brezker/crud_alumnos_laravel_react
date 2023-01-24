<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function index()
    {
        $alumnos = Alumnos::all();
        return $alumnos;
    }

    public function store(Request $request)
    {
        $alumno = new Alumnos();
        $alumno->nombre = $request->post('nombre');
        $alumno->matricula = $request->post('matricula');
        $alumno->edad = $request->post('edad');

        $alumno->save();
    }

    public function show($id)
    {
        $alumno = Alumnos::find($id);
        return $alumno;
    }


    public function update(Request $request, $id)
    {
        $alumno = new Alumnos();
        $alumno->nombre = $request->nombre;
        $alumno->matricula = $request->matricula;
        $alumno->edad = $request->edad;

        $alumno->save();
        return $alumno;
    }

    public function destroy($id)
    {
        $alumno = Alumnos::destroy($id);
        return $alumno;
    }
}
