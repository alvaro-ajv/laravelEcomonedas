<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;
use Storage;
use App\Rules\ValidColor;

class MaterialController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function getListado()
    {
      $materiales = Material::all();
      return view('admin.material.adminMaterial',['materiales'=>$materiales]);
    }

    public function getCreate()
    {
      return view('admin.material.crearMaterial');
    }

    public function postCreate(Request $request)
    {
      $this->validate($request, [
        'nombre' => 'required|min:5',
        'precio' => 'required|numeric',
        'color'=>  ['required', new ValidColor],
        'imagen'=> 'required|image'
      ]);

      $img = $request->file('imagen');
      $file_route = time().'_'.$img->getClientOriginalName();

      Storage::disk('imgMateriales')->put($file_route,file_get_contents($img->getRealPath()));

        $material = new Material([
          'nombre'=>$request->input('nombre'),
          'precio'=>$request->input('precio'),
          'color'=>$request->input('color'),
          'imagen'=>$file_route
        ]);

        $material->save();
        alert()->success($request->input('nombre'),'Material creado');

        return redirect()->route('admin.materiales');
    }

    public function getEdit($id)
    {
      $material = Material::find($id);
      return view('admin.material.editMaterial',['material'=>$material]);
    }

    public function postEdit(Request $request)
    {
      $material= Material::find($request->input('id'));
      if($material->color != $request->input('color')){
        $this->validate($request, [
          'nombre' => 'required|min:5',
          'precio' => 'required|numeric',
          'color'=> ['required', new ValidColor],
          'imagen'=> 'image'
        ]);
      }
      else{
        $this->validate($request, [
          'nombre' => 'required|min:5',
          'precio' => 'required|numeric',
          'color'=> 'required',
          'imagen'=> 'image'
        ]);
      }

      $material->nombre=$request->input('nombre');
      $material->precio=$request->input('precio');
      $material->color=$request->input('color');

      if($request->hasFile('imagen')){
        $img = $request->file('imagen');
        $file_route = time().'_'.$img->getClientOriginalName();

        Storage::disk('imgMateriales')->put($file_route,file_get_contents($img->getRealPath()));


      }
      else{
        $img=$material->imagen;
      }

      $material->imagen=$img;
      $material->save();

      alert()->success($request->input('nombre'),'Material actualizado');

      return redirect()->route('admin.materiales');

    }

}
