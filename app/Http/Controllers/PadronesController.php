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
    public function store(Request $request)
    {
        $padron=DB::table('padrones')->where("numero_ced","=",$request->nroCi)->get();
        if($padron->count()>0) {   
            return response()->json(['id'=>$padron->id,'cedula'=>$padron->cedula,'nombre'=>$padron->nombre,'apellido'=>$padron->apellido,'fecha_nac'=>$padron->fecha_naci,'departamento'=>$padron->fecha_naci,'distrito'=>$padron->distrito,'nroSeccional'=>$padron->nroSeccional,'seccional'=>$padron->seccional,'seccional'=>$padron->seccional]);
                /*return response()->json(['error'=>3]);*/ 
        }else{
            return redirect()->route('padron.index')->with(['error'=>'1']);
        }
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
