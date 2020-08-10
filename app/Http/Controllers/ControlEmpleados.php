<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ControlEmpleados extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /* $lista_empleados = DB::select('select * from empleado');*/

      $lista_empleados = DB::table('empleado')->paginate(10);
       return view('empleados.index', compact('lista_empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate(['nombre'=>'required|max:100','apellido1'=>'required|max:100', 'apellido2'=>'max:100', 'direccion'=>'max:100', 'telefono'=>'required|max:30', 'usuario'=>'required|max:50', 'contrasenia'=>'required|max:20']);

         DB::table('empleado')->insert(["Nombreem"=>$request->input('nombre'), "Apellido1"=>$request->input('apellido1'), "Apellido2"=>$request->input('apellido2'), "Direccion"=>$request->input('direccion'), "Telefono"=>$request->input('telefono'), "estado"=>'Activo']);

         DB::table('usuario')->insert(["usuario"=>$request->input('usuario'), "contrasenia"=>$request->input('contrasenia'), "tipo"=>'E']);

         $id_lista = DB::table('empleado')
   ->where([['Nombreem', $request->input('nombre')],['Telefono', $request->input('telefono')]])->first();

    DB::table('empleado_usuario')
       ->insert(["IDem"=>$id_lista->IDem, "usuario"=>$request->input('usuario')]);

       return redirect()->route('empleados.index', compact('empleado'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $IDem
     * @return \Illuminate\Http\Response
     */
    public function show($IDem)
    {
        $empleado = DB::table('empleado')->where('IDem', $IDem)->first();

        $num_citas = DB::table('cita')->where('IDem', $IDem)->count();
        return view('empleados.show', compact('empleado', 'num_citas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $IDem
     * @return \Illuminate\Http\Response
     */
    public function edit($IDem)
    {
        $empleado_editar=DB::table('empleado')->where('IDem',$IDem)->first();
        return view('empleados.edit', compact('empleado_editar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $IDem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $IDem)
    {
        $validatedData = $request->validate(['nombre'=>'required|max:100','apellido1'=>'required|max:100', 'apellido2'=>'max:100', 'direccion'=>'max:100', 'telefono'=>'required|max:30']);

         DB::table('empleado')->where('IDem', $IDem)->update([
            "Nombreem"=>$request->input('nombre'),
            "Apellido1" => $request->input('apellido1'),
            "Apellido2" => $request->input('apellido2'),
            "Direccion" => $request->input('direccion'),
            "Telefono" => $request->input('telefono'),
            "estado" => request('estado'),
        ]);

         return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
