<?php

namespace App\Http\Controllers;

use App\CentroAcopio;
use App\Provincia;
use Illuminate\Http\Request;
use App\Rules\ValidOption;
use Alert;


class CentroAcopioController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

    
    public function getListado()
    {
       $centros = CentroAcopio::all();
       return view('admin.centroAcopio.adminCentro',['centros'=>$centros]);

    }

    public function getCreate()
    {
      $provincias = Provincia::all();
      return view('admin.centroAcopio.crearCentro',['provincias'=>$provincias]);
    }

    public function postCreate(Request $request)
    {
      $this->validate($request, [
        'nombre' => 'required|min:5',
        'direccion' => 'required|min:10',
        'provincia' => ['required', new ValidOption]
      ]);

        $centro = new CentroAcopio([
          'nombre'=>$request->input('nombre'),
          'direccion'=>$request->input('direccion'),
          'provincia_id'=>$request->input('provincia')
        ]);

        $centro->save();

        alert()->success($request->input('nombre'),'Centro de acopio creado');
        return redirect()->route('admin.centros');
    }

    public function getEdit($id)
    {
      $centro = CentroAcopio::find($id);
      $provincias = Provincia::all();
      return view('admin.centroAcopio.editCentro',['centro'=>$centro,'provincias'=>$provincias]);

    }

    public function postEdit(Request $request )
    {
      $this->validate($request, [
        'nombre' => 'required|min:5',
        'direccion' => 'required|min:10',
        'provincia' => 'required'
      ]);

        $prov = Provincia::find($request->input('provincia'));
        $centro= CentroAcopio::find($request->input('id'));
        $centro->nombre=$request->input('nombre');
        $centro->direccion=$request->input('direccion');
        $centro->provincia()->associate($prov);
        $centro->save();




      alert()->success($request->input('nombre'),'Centro de acopio actualizado');
      return redirect()->route('admin.centros');

    }
}
