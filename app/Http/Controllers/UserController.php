<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getListado()
    {
      return view('admin.usuario.adminUsuario');
    }


    public function getUserCrear()
    {
      return view('publico.register');
    }

    public function userCrear(Request $request)
    {
        $this->validate($request, ['nombre'=> 'required','apellidos'=> 'required','telefono'=> 'required',
        'email'=> 'required','direccion'=> 'required','password'=>  'required', ]);

      


        $user= new User( ['nombre'=> $request->input('nombre'),'apellidos'=> $request->input('apellidos'),
        'telefono'=> $request->input('telefono'),'email'=> $request->input('email'),'direccion'=> $request->input('direccion'),
        'password'=>  bcrypt($request->input('password')) ,'tipo_usuario_id'=>3,'remember_token' => str_random(10)]);

        $user->save();

        return redirect()->route('publico.login');
    }
}
