<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ControlVehiculos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*  $lista_vehiculos = DB::select('select cl.Nombrecli, vh.*
    FROM vehiculo vh join cliente cl on cl.IDcli = vh.IDcli');
        */

        $lista_vehiculos = DB::table('vehiculo')
        ->join('cliente', 'cliente.IDcli', '=', 'vehiculo.IDcli')->paginate(10);
        return view('vehiculos.index', compact('lista_vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $validatedData =$request->validate(['matricula'=>'required|max:30','marca'=>'required|max:100','modelo'=>'required|max:100']);

        DB::table('vehiculo')->insert(["matricula"=>$request->input('matricula'), "marca"=>$request->input('marca'), "modelo"=>$request->input('modelo'), "estado"=>'Activo']);

        return redirect()->route('vehiculos.index', compact('vehiculo'));
    }

    /**
     * Display the specified resource.
     * @param  string  $matricula
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($matricula)
    {

/*$lista_vehiculos = DB::select('select cl.Nombrecli, vh.*
    FROM vehiculo vh join cliente cl on cl.IDcli = vh.IDcli');*/



        $vehiculo = DB::table('vehiculo')->where('matricula', $matricula)->first();
        $id = DB::table('vehiculo')->select('IDcli')->where('matricula', $matricula)->first();
        $cliente = DB::table('cliente')->where('IDcli', $id->IDcli)->first();
        return view('vehiculos.show', compact('vehiculo','cliente'));
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
    public function vhregistro(Request $request){
        $this.validate($request, ['matricula'=>'required|max:30','marca'=>'required|max:100','modelo'=>'required|max:100']);
    }
}
