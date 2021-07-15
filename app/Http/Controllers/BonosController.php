<?php

namespace App\Http\Controllers;

use App\Models\Bonos;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BonosController extends Controller
{

    public function index()
    {
        $elementos = Bonos::join('usuarios','usuarios.id_usuario','bonos.usuario_id_usuario')
        ->select(['bonos.*','usuarios.nombre as nombreU','usuarios.apellido as apellidoU'])
        ->get();
        return view('bonos.index')->with('bonos', $elementos);
    }

    public function create()
    {
        $elementos=Usuarios::all();
         return view('bonos.create')->with('usuarios',$elementos);
    }

    public function store(Request $request)
    {
        $elementos= new Bonos();;
        $elementos->usuario_id_usuario=$request->get('usuario_id_usuario');
        $elementos->motivo=$request->get('motivo');
        $elementos->valor_bono=$request->get('valor_bono');
        $elementos->fecha_bono=$request->get('fecha_bono');
        $elementos->save();
        return redirect('/bonos');
    }

    public function edit($id)
    {
        $elemento = Bonos::find($id);
        $usuarios = Usuarios::all();
        return view('bonos.edit')->with('bonos',$elemento)->with('usuario',$usuarios);
    }

    public function update(Request $request, $id)
    {
        $elementos = Bonos::find($id);
        $elementos->motivo=$request->get('motivo');
        $elementos->valor_bono=$request->get('valor_bono');
        $elementos->fecha_bono=$request->get('fecha_bono');
        $elementos->save();
        return redirect('/bonos');
    }

    public function destroy($id)
    {
        $elementos = Bonos::find($id);
        $elementos->delete();
        return redirect('/bonos');
    }


    //Filtros de Bonos
    public function filtrar(){
        $total=0;
        return view('bonos.filtrarbonos')->with('total',$total);
    }

    public function filtrarBonos(Request $request){
        $total=Bonos::where('fecha_bono', '>=', $request->fecha1)
        ->where('fecha_bono','<=',$request->fecha2)
        ->sum('valor_bono');
        $filtro=Bonos::where('fecha_bono', '>=', $request->fecha1)
        ->where('fecha_bono','<=',$request->fecha2)
        ->join('usuarios','usuarios.id_usuario','=','bonos.usuario_id_usuario')
        ->groupBy('usuarios.nombre','usuarios.apellido')
        ->select('usuarios.nombre','usuarios.apellido',DB::raw('count(*) as contador'), DB::raw('SUM(valor_bono) as filtro_usuario'))
        ->get();
        return view('bonos.filtrarbonos')->with('filtro', $filtro)->with('total',$total);
    }
}
