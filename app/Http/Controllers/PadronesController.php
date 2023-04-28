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
    public function __construct()
    {
        $this->middleware('can:padron.index')->only('index');
        $this->middleware('can:padron.index')->only('consultarPadron');
    }
    public function index()
    {
        //llamar a consultar padron
         //Por Local de votación
         $l1=DB::table('checks')->where("id_user","=","1")->get();
         $local1=$l1->count();
 
         $l2=DB::table('checks')->where("id_user","=","2")->get();
         $local2=$l2->count();
 
         $l3=DB::table('checks')->where("id_user","=","3")->get();
         $local3=$l3->count();
 
         $l4=DB::table('checks')->where("id_user","=","4")->get();
         $local4=$l4->count();
 
         $l5=DB::table('checks')->where("id_user","=","5")->get();
         $local5=$l5->count();
 
         $l6=DB::table('checks')->where("id_user","=","6")->get();
         $local6=$l6->count();
 
         $l7=DB::table('checks')->where("id_user","=","7")->get();
         $local7=$l7->count();
 
         $l8=DB::table('checks')->where("id_user","=","8")->get();
         $local8=$l8->count();
 
         $l9=DB::table('checks')->where("id_user","=","9")->get();
         $local9=$l9->count();
 
         $l10=DB::table('checks')->where("id_user","=","10")->get();
         $local10=$l10->count();
 
         $l11=DB::table('checks')->where("id_user","=","11")->get();
         $local11=$l11->count();
 
         $l12=DB::table('checks')->where("id_user","=","12")->get();
         $local12=$l12->count();
 
         
         //fraudes por seccional
         $frad1 = DB::table('checks')->where("id_user","=","1")->sum('contador');
         $fraudes1 = intval($frad1) - intval($local1);
 
         $frad2 = DB::table('checks')->where("id_user","=","2")->sum('contador');
         $fraudes2 = intval($frad2) - intval($local2);
 
         $frad3 = DB::table('checks')->where("id_user","=","3")->sum('contador');
         $fraudes3 = intval($frad3) - intval($local3);
 
         $frad4 = DB::table('checks')->where("id_user","=","4")->sum('contador');
         $fraudes4 = intval($frad4) - intval($local4);
 
         $frad5 = DB::table('checks')->where("id_user","=","5")->sum('contador');
         $fraudes5 = intval($frad5) - intval($local5);
 
         $frad6 = DB::table('checks')->where("id_user","=","6")->sum('contador');
         $fraudes6 = intval($frad6) - intval($local6);
 
         $frad7 = DB::table('checks')->where("id_user","=","7")->sum('contador');
         $fraudes7 = intval($frad7) - intval($local7);
 
         $frad8 = DB::table('checks')->where("id_user","=","8")->sum('contador');
         $fraudes8 = intval($frad8) - intval($local8);
 
         $frad9 = DB::table('checks')->where("id_user","=","9")->sum('contador');
         $fraudes9 = intval($frad9) - intval($local9);
 
         $frad10 = DB::table('checks')->where("id_user","=","10")->sum('contador');
         $fraudes10 = intval($frad10) - intval($local10);
 
         $frad11 = DB::table('checks')->where("id_user","=","11")->sum('contador');
         $fraudes11 = intval($frad11) - intval($local11);
 
         $frad12 = DB::table('checks')->where("id_user","=","12")->sum('contador');
         $fraudes12 = intval($frad12) - intval($local12);

         $user = Auth::user();

         
         //return $local3;
        return view('padron.index', compact('user','local1','local2','local3','local4','local5','local6',
        'local7','local8','local9','local10','local11','local12','fraudes1','fraudes2','fraudes3',
        'fraudes4','fraudes5','fraudes6','fraudes7','fraudes8','fraudes9','fraudes10','fraudes11','fraudes12'));
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
          $padron=DB::table('padrones')->where("numero_ced","=",$request->nroCi)->get();
     
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
