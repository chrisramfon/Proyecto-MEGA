<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControlLogin extends Controller
{
    function login(Request $request){
    	$validatedata = $request->validate(['usuario'=>'required|max:50', 'contrasenia'=>'required|max:20']);

    	$inicio = DB::select('select us.* 
from usuario us join empleado_usuario eu on eu.usuario = us.usuario
join empleado em on em.IDem = eu.IDem
where us.usuario like ? and us.contrasenia like ? and us.tipo like "E" and em.estado like "Activo"', [$request->input('usuario'), $request->input('contrasenia')]);

    	if($inicio){
    		session(['usuario'=>$inicio]);
    		return redirect()->route('Cita.index');
    	}else{
    		Session::flash('flash_message','Usuario o contraseña incorrecto'); 
            return redirect()->route('index')->with(['aviso', 'Usuario o Contraseña incorrectos']);
    	}
    }//Cierre login

    function salir(){
		session()->forget('usuario');
        return redirect('/');
    }//Cierre salir
}//Cierre de controllogin
