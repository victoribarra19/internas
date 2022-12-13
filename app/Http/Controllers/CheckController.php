<?php

namespace App\Http\Controllers;

use App\Models\Check;
use App\Http\Requests\StoreCheckRequest;
use App\Http\Requests\UpdateCheckRequest;
use App\Models\User;
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
        $user_pc=User::find($id_user)->pc;
        $padron=DB::table('padrones')->where("numero_ced","=",$request->ci)->get();
        $ultimo=DB::table('checks')->where("numero_ced","=",$request->ci)->max('contador');
        if($ultimo==0){
            $contador=intval($ultimo)+1;
            //crear nuevo
            $check=Check::create([
                'numero_ced'=>$padron[0]->numero_ced,
                'codigo_sec'=>$padron[0]->codigo_sec,
                'desc_sec'=>$padron[0]->desc_sec,
                'slocal'=>$padron[0]->slocal,
                'desc_locanr'=>$padron[0]->desc_locanr,
                'contador'=>$contador,
                'id_user'=>$user_pc
            ]);     
        }else{
            $contador=intval($ultimo)+1;
            //actualizar
            $data = array(
                'contador'=>$contador
            );
            DB::table('checks')
                ->where('numero_ced', $padron[0]->numero_ced,)
                ->update($data);     
        }
        return response()->json(['success'=>'1','nombre'=>$padron[0]->nombre,'apellido'=>$padron[0]->apellido,'contador'=>$contador]);

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
