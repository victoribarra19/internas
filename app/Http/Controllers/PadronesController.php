<?php

namespace App\Http\Controllers;

use App\Models\Padrones;
use App\Http\Requests\StorePadronesRequest;
use App\Http\Requests\UpdatePadronesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PadronesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //llamar a consultar padron
        return view('padron.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePadronesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePadronesRequest $request)
    {   
       // $padron=Padrones::all()->where("numero_ced","=",".$request->nroCi.");
        //$padron=DB::table('padrones')->where("numero_ced","=","".$request->nroCi)->get();
        //return response()->json(['success'=>'1','id'=>$padron->id,'cedula'=>$padron->numero_ced]);
        
    }
    public function consultarPadron(Request $request)
    {   
       // return $request->nroCi;
         //$padron=Padrones::all()->where("numero_ced","=",$request->nroCi);
          $padron=DB::table('Padrones')->where("numero_ced","=",$request->nroCi)->get();
     
        //$padron=DB::table('padrones')->where("numero_ced","=","".$request->nroCi)->get();
       return response()->json(['success'=>'1','cedula'=>$padron[0]->numero_ced,'nombre'=>$padron[0]->nombre,'apellido'=>$padron[0]->apellido,'fecha_nac'=>$padron[0]->fecha_naci,'departamento'=>$padron[0]->desc_dep,'distrito'=>$padron[0]->desc_dis,'nroSeccional'=>$padron[0]->codigo_sec,'seccional'=>$padron[0]->desc_sec,'local'=>$padron[0]->desc_locanr,'mesa'=>$padron[0]->mesa,'orden'=>$padron[0]->orden]);
        
    }   
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Padrones  $padrones
     * @return \Illuminate\Http\Response
     */
    public function show(Padrones $padrones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Padrones  $padrones
     * @return \Illuminate\Http\Response
     */
    public function edit(Padrones $padrones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePadronesRequest  $request
     * @param  \App\Models\Padrones  $padrones
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePadronesRequest $request, Padrones $padrones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Padrones  $padrones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Padrones $padrones)
    {
        //
    }
}
