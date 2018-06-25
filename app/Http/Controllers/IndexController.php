<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\CentroAcopio;

class IndexController extends Controller
{
    public function getIndex()
    {
      $centros = CentroAcopio::all();
      $materiales = Material::orderby('nombre','ASC')->get();

      return view('publico.index',['centros'=>$centros,'materiales'=>$materiales]);

    }
}
