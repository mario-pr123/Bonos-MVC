<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $elementos = Usuarios::all();
        return view('usuarios.index')->with('usuarios', $elementos);
    }


    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $elemento = new Usuarios();
        $elemento->nombre = $request->get('nombre');
        $elemento->apellido = $request->get('apellido');
        $elemento->email= $request->get('email');
        $elemento->password = $request->get('password');
        $elemento->telefono= $request->get('telefono');
        $elemento->save();
        return redirect('/usuarios');
    }

    public function edit($id)
    {
        $elemento = Usuarios::find($id);
        return view('usuarios.edit')->with('usuarios',$elemento);
    }


    public function update(Request $request, $id)
    {
        $elemento = Usuarios::find($id);
        $elemento->nombre = $request->get('nombre');
        $elemento->apellido = $request->get('apellido');
        $elemento->email= $request->get('email');
        $elemento->password = $request->get('password');
        $elemento->telefono= $request->get('telefono');
        $elemento->save();
        return redirect('/usuarios');
    }

    public function destroy($id)
    {
        $elemento = Usuarios::find($id);
        $elemento->delete();
        return redirect('/usuarios');
    }
}
