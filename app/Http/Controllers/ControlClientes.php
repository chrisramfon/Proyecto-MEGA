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
       /* $lista_clientes = DB::select('select * from cliente');*/
       $lista_clientes = DB::table('cliente')->paginate(10);
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
        
        $validatedData = $request->validate(['nombre'=>'required|max:100','apellido1'=>'required|max:100', 'apellido2'=>'max:100', 'direccion'=>'max:100', 'telefono'=>'required|max:30', 'usuario'=>'required|max:50', 'contrasenia'=>'required|max:20']);

        DB::table('cliente')->insert(["Nombrecli"=>$request->input('nombre'), "Apellido1"=>$request->input('apellido1'), "Apellido2"=>$request->input('apellido2'), "Direccion"=>$request->input('direccion'), "Telefono"=>$request->input('telefono'), "Estado"=>'Activo']);
      
        DB::table('usuario')->insert(["usuario"=>$request->input('usuario'), "contrasenia"=>$request->input('contrasenia'), "tipo"=>'C']);

   $id_lista = DB::table('cliente')
   ->where([['Nombrecli', $request->input('nombre')],['Telefono', $request->input('telefono')]])->first();

       DB::table('cliente_usuario')
       ->insert(["IDcli"=>$id_lista->IDcli, "usuario"=>$request->input('usuario')]);

        return redirect()->route('clientes.index', compact('cliente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $IDcli
     * @return \Illuminate\Http\Response
     */
    public function show($IDcli)
    {
       $cliente = DB::table('cliente')->where('IDcli', $IDcli)->first();
    $lista_vehiculos = DB::table('vehiculo')->where('IDcli', $IDcli)->paginate(10);
    $num_vh = DB::table('vehiculo')->where('IDcli', $IDcli)->count();
    $num_citas = DB::table('cita')->where('IDcli', $IDcli)->count();
        return view('clientes.show', compact('cliente', 'lista_vehiculos', 'num_vh', 'num_citas'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $IDcli
     * @return \Illuminate\Http\Response
     */
    public function edit($IDcli)
    {
       $cliente_editar=DB::table('cliente')->where('IDcli',$IDcli)->first();
        return view('clientes.edit', compact('cliente_editar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $IDcli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $IDcli)
    {

 $validatedData = $request->validate(['nombre'=>'required|max:100','apellido1'=>'required|max:100', 'apellido2'=>'max:100', 'direccion'=>'max:100', 'telefono'=>'required|max:30']);

        DB::table('cliente')->where('IDcli', $IDcli)->update([
            "Nombrecli"=>$request->input('nombre'),
            "Apellido1" => $request->input('apellido1'),
            "Apellido2" => $request->input('apellido2'),
            "Direccion" => $request->input('direccion'),
            "Telefono" => $request->input('telefono'),
            "estado" => request('estado'),
        ]);

        return redirect()->route('clientes.index');
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
