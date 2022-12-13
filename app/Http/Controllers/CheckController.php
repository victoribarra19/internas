<?php

namespace App\Http\Controllers;

use App\Models\Check;
use App\Http\Requests\StoreCheckRequest;
use App\Http\Requests\UpdateCheckRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * @param  \App\Http\Requests\StoreCheckRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCheckRequest $request)
    {
       // return $padron=DB::table('Padrones')->where("numero_ced","=",$request->cedula)->get();

    }
    public function check(Request $request)
    {
        // $request->ci;
        $id_user=Auth::id();
        $padron=DB::table('Padrones')->where("numero_ced","=",$request->ci)->get();
        $ultimo=DB::table('Padrones')->where("numero_ced","=",$request->ci)->max('contador');
        if($ultimo==0){
            $contador=intval($ultimo)+1;
            //crear nuevo
            $check=Check::create([
                'año'=>$request->año,
                'dependencias_id'=>$request->id,
                'estado_poas_id'=>'1',
                'nro_seguimiento'=>'0',
                'estado_seg_id'=>'1'
            ]);
            
        }else{
            $contador=intval($ultimo)+1;
            //actualizar
            $data = array(
                'objetivo'	=>	$request->objetivo
            );
            DB::table('objetivos')
                ->where('id', $request->id)
                ->update($data);
            
        }
            return response()->json(['success'=>'1','nombre'=>$padron[0]->nombre,'apellido'=>$padron[0]->apellido]);

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function show(Check $check)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function edit(Check $check)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCheckRequest  $request
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCheckRequest $request, Check $check)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function destroy(Check $check)
    {
        //
    }
}
