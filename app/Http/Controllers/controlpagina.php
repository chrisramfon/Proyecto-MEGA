<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlpagina extends Controller
{
    public function registrado(Request $request){
$this->validate($request,['nombre' => 'required', 'correo' => 'required']);
return $request->all();
    }
}
