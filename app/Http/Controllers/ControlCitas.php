<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class ControlCitas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_citas=DB::select('select * from cita');
        return view('Citas.index', compact('lista_citas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Citas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('cita')->inster(["hora"=>$request->input('hora'),"fecha"=>$request->input('fecha'), "comentarios"=>$request->input('comentarios')]);

        return redirect()->route('Citas.index',compact('Cita_cliente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $IDcita
     * @return \Illuminate\Http\Response
     */
    public function show($IDcita)
    {
         $cita = DB::table('cita')->where('IDcita', $IDcita)->first();
         $cliente = DB::table('cliente')->where('IDcli', $cita->IDcli)->first();
         $vehiculo = DB::table('vehiculo')->where('Matricula', $cita->Matricula)->first();
         $empleado = DB::table('empleado')->where('IDem', $cita->IDem)->first();
         return view('citas.show', compact('cita','cliente', 'vehiculo', 'empleado'));
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
