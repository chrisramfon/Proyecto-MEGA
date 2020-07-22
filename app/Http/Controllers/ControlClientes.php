<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ControlClientes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_clientes = DB::select('select * from cliente');
        return view('clientes.index', compact('lista_clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        DB::table('cliente')->insert(["Nombrecli"=>$request->input('nombre'), "Apellido1"=>$request->input('apellido1'), "Apellido2"=>$request->input('apellido2'), "Direccion"=>$request->input('direccion'), "Telefono"=>$request->input('telefono')]);
      
        DB::table('usuario')->insert(["usuario"=>$request->input('usuario'), "contrasenia"=>$request->input('contrasenia')]);

   $id_lista = DB::table('cliente')
   ->where([['Nombrecli', $request->input('nombre')],['Telefono', $request->input('telefono')]])->first();

       DB::table('cliente_usuario')
       ->insert(["IDcli"=>$id_lista->IDcli, "usuario"=>$request->input('usuario')]);

        return redirect()->route('clientes.index', compact('cliente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
